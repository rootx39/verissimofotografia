<?php


if (!class_exists("FinalTilesGallery"))
{
	class FinalTilesGallery
	{
		private $defaultValues;		

		public function __construct($galleryId, $db, $defaultValues, $attrs)
		{
			$this->id = $galleryId;
			$this->defaultValues = $defaultValues;
			$this->gallery = null;
			$this->db = $db;
			$this->images = array();	

			$this->getGallery();
			foreach($attrs as $k => $v) {
				$prop = FinalTilesGalleryUtils::shortcodeToFieldName($k);
				if(isset($this->gallery->$prop))
					$this->gallery->$prop = $v;
			}

			switch($this->gallery->source)
			{
				default:
				case "images":
					$this->getImages();
					break;
				case "posts":
					$this->getPosts();
					break;
				case "woocommerce":
					$this->getWooProducts();
					break;
			}

			$attIDs = array();
			foreach($this->images as $image)
				$attIDs []= $image->attID;

			$args = array(
				'post_type' => 'attachment',
				'posts_per_page' => -1,
				'include' => $attIDs
			);

			$atts = get_posts($args);

			$upload_dir = wp_upload_dir();
			$metaData = array();
			foreach($atts as $att)
			{
				$file = get_post_custom($att->ID);

				$metaData["att" . $att->ID] = array(
					'alt' => get_post_meta( $att->ID, '_wp_attachment_image_alt', true ),
					'caption' => $att->post_excerpt,
					'description' => $att->post_content,
					'href' => get_permalink( $att->ID ),
					'url' => $this->gallery->lightboxImageSize == 'full' ? 
								$att->guid : 
								wp_get_attachment_image_url($att->ID, $this->gallery->lightboxImageSize, false),
					'original' => $att->guid, 
					'title' => $att->post_title,
					'page' => wp_get_attachment_url($att->ID),
					'file' => $file['_wp_attached_file'][0]
				);
			}

			foreach($this->images as &$image)
			{
				if(isset($image->imageId) && isset($metaData['att' . $image->imageId]))
				{
					$meta          = $metaData[ 'att' . $image->imageId ];
					$sizes         = FinalTiles_Gallery::get_image_size_links( $image->imageId );
					$search 	   = array_search( $image->imagePath, $sizes );
					if($search)
					{
						$size = explode( "x", $search );
					}
					else
					{
						$md = wp_get_attachment_metadata($image->imageId);
						$size = array($md["width"], $md["height"]);	
					}
					$image->width  		= $size[0];
					$image->height 		= $size[1];
					$image->url    		= $meta['url'];
					$image->page 		= $meta['page'];
					$image->original    = $meta['original'];
					$image->alt    		= $meta['alt'];
				}
			}

		}		

		var $cssPrefixes = array("-moz-", "-webkit-", "-o-", "-ms-", "");

		private function getLink($image)
		{
			if(! empty($image->link))
				return "href='" . $image->link . "'";

			if(wp_is_mobile())
			{
				switch ($this->gallery->mobileLightbox) {
					case 'attachment-page':
						return "href='" . $image->page . "'";
					case '':
					case 'nolink':
						return '';
				}
			}
			else
			{
				switch (trim($this->gallery->lightbox)) {
					case 'attachment-page':
						return "href='" . $image->page . "'";
					case '':
					case 'nolink':
						return '';
				}
			}

			$url = isset($image->url) ? $image->url : "";
			return "href='" . $url . "'";
		}


		private function getTarget($image)
		{
			if(! empty($image->target) && $image->target == '_lightbox')
				return '';

			if(! empty($image->target))
				return "target='" . $image->target . "'";

			if($this->gallery->blank == 'T')
				return "target='_blank'";

			return '';
		}

		private function isVideoLink($url)
		{
			$res = array();
			preg_match("/https?:\/\/(?:www\.)?vimeo\.com\/\d{6}/", $url, $res);

			if(count($res) > 0)
				return true;

			preg_match("/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/", $url, $res);

			if(count($res) > 0)
				return true;

			return false;
		}

		private function getLightboxClass($image)
		{
			if(! empty($image->target) && $image->target == '_lightbox' && ! empty($image->link))
			{
				if($this->gallery->lightbox == 'magnific' ||
				   $this->gallery->lightbox == 'colorbox')
					return "ftg-lightbox-iframe";
				if($this->gallery->lightbox == 'fancybox')
					return "ftg-lightbox iframe";

				if($this->gallery->lightbox == 'lightgallery' ||
				   $this->gallery->lightbox == 'prettyphoto')
					return 'ftg-lightbox';

				if($this->gallery->lightbox == 'everlightbox')
					return 'ftg-lightbox everlightbox-trigger';
			}

			if(! empty($image->link) && ! $this->isVideoLink($image->link))
				return '';

			if(wp_is_mobile() && empty($this->gallery->mobileLightbox))
				return '';

			if(!wp_is_mobile() && empty($this->gallery->lightbox))
				return '';

			if($this->gallery->lightbox == 'nolink')
				return '';

			if($this->gallery->lightbox == 'magnific' && ! empty($image->link))
				return 'ftg-lightbox mfp-iframe';

			return 'ftg-lightbox';
		}

		private function getdef($value, $default)
		{
			if($value == NULL || empty($value))
				return $default;

			return $value;
		}

		private function toRGB($Hex)
		{
			if (substr($Hex,0,1) == "#")
				$Hex = substr($Hex,1);

			$R = substr($Hex,0,2);
			$G = substr($Hex,2,2);
			$B = substr($Hex,4,2);

			$R = hexdec($R);
			$G = hexdec($G);
			$B = hexdec($B);

			$RGB['R'] = $R;
			$RGB['G'] = $G;
			$RGB['B'] = $B;

			$RGB[0] = $R;
			$RGB[1] = $G;
			$RGB[2] = $B;

			return $RGB;

		}

		static public function slugify($text)
		{
			$text = preg_replace('~[^\\pL\d]+~u', '-', $text);
			$text = trim($text, '-');

			if(function_exists("iconv"))
				$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
			$text = strtolower($text);
			$text = preg_replace('~[^-\w]+~', '', $text);

			if (empty($text))
			{
				return 'n-a';
			}

			return $text;
		}

		static public function getFilters($filters)
		{
			if(empty($filters))
				return "";

			$css = array();
			foreach (explode("|", $filters) as $f) {
				$css[] = "ftg-set-" . FinalTilesGallery::slugify($f);
			}

			return implode(" ", $css);
		}

		private function hasSocial()
		{
			return  $this->gallery->enableFacebook == "T" ||
					$this->gallery->enableTwitter == "T" ||
					$this->gallery->enablePinterest == "T" ||
					$this->gallery->enableGplus == "T";
		}
		
		public function useCaptions()
		{		
			if($this->gallery->source == "images")
			{
				if(empty($this->gallery->wp_field_caption))
					return true;

				return $this->gallery->wp_field_caption != 'none' ||
				       $this->gallery->wp_field_title != 'none';
			}
			if($this->gallery->source == "posts")
			{
				return $this->gallery->recentPostsCaption != 'none';
			}
			if($this->gallery->source == "woocommerce")
			{
				return true;
			}
			return false;
		}

		public function cssRuleRotation($prefix)
		{
			if($this->gallery->hoverRotation == 0)
				return "";

			return $prefix."rotate(".$this->gallery->hoverRotation."deg) ";
		}

		public function cssRuleZoom($prefix)
		{
			if($this->gallery->hoverZoom == 100 || $this->gallery->hoverZoom == 0)
				return "";

			return $prefix."scale(".($this->gallery->hoverZoom/100).") ";
		}

		private function hasCaptionIcon()
		{
			return !(empty($this->gallery->captionIcon) &&
			         empty($this->gallery->customCaptionIcon));
		}

		private function getCaptionIcon()
		{
			if(! empty($this->gallery->customCaptionIcon))
				return substr($this->gallery->customCaptionIcon, 3);

			return $this->gallery->captionIcon;
		}

		public function render()
		{
			$rid = $this->id;

			$gallery = $this->gallery;

			//shuffle enabled?
			if($gallery->imagesOrder == 'random')
				shuffle($this->images);

			//images order
			if($gallery->imagesOrder == 'reverse')
				$this->images = array_reverse($this->images);

			//style
			$bgCaption = $this->toRGB($gallery->captionBackgroundColor);

			$html = "<!-- Final Tiles Grid Gallery for WordPress v".FTGVERSION." -->\n\n";
			$html .= stripslashes($this->gallery->beforeGalleryText);

			$captionVertical = null;
			$captionHorizontal = null;


			$html .= "<style>\n";

			if($gallery->borderSize)
				$html .= "#ftg-$this->id$rid .tile { border: " . $gallery->borderSize . "px solid " . $gallery->borderColor . "; }\n";

			if($gallery->captionIconColor)
				$html .= "#ftg-$this->id$rid .tile .icon { color:".$gallery->captionIconColor."; }\n";

			if($gallery->loadingBarColor)
				$html .= "#ftg-$this->id$rid .ftg-items .loading-bar i { background:" . $gallery->loadingBarColor  . "; }\n";

			if($gallery->loadingBarBackgroundColor)
				$html .= "#ftg-$this->id$rid .ftg-items .loading-bar { background:" . $gallery->loadingBarBackgroundColor  . "; }\n";

			if($gallery->captionIconSize)
			{
				$html .= "#ftg-$this->id$rid .tile .icon { font-size:".$gallery->captionIconSize."px; }\n";
				$html .= "#ftg-$this->id$rid .tile .icon { margin: -".($gallery->captionIconSize / 2)."px 0 0 -".($gallery->captionIconSize / 2)."px; }\n";
			}

			if($gallery->captionFontSize)
			{
				$html .= "#ftg-$this->id$rid .tile .caption-block .text-wrapper span.text { font-size:".$gallery->captionFontSize."px; }\n";
			}
			if($gallery->titleFontSize)
			{
				$html .= "#ftg-$this->id$rid .tile .caption-block .text-wrapper span.title { font-size:".$gallery->titleFontSize."px; }\n";
			}

			if($gallery->backgroundColor)
				$html .= "#ftg-$this->id$rid .tile { background-color: " . $gallery->backgroundColor . "; }\n";

			if($gallery->captionColor)
			{
				$html .= "#ftg-$this->id$rid .tile .caption-block .text-wrapper span.text { color: " . $gallery->captionColor . "; }\n";
				$html .= "#ftg-$this->id$rid .tile .caption-block .text-wrapper span.title { color: " . $gallery->captionColor . "; }\n";
			}

			if($gallery->socialIconColor)
				$html .= "#ftg-$this->id$rid .tile .ftg-social a { color: " . $gallery->socialIconColor . "; }\n";

			if($gallery->borderRadius)
				$html .= "#ftg-$this->id$rid .tile { border-radius: " . $gallery->borderRadius . "px; }\n";

			if($gallery->shadowSize)
				$html .= "#ftg-$this->id$rid .tile { box-shadow: " . $gallery->shadowColor ." 0px 0px " . $gallery->shadowSize . "px; }\n";

			if($gallery->captionEasing)
				$html .= "#ftg-$this->id$rid .tile .caption-block { transition-timing-function:".$gallery->captionEasing."; }\n";

			if($gallery->captionEffectDuration)
				$html .= "#ftg-$this->id$rid .tile .caption-block { transition-duration:".($gallery->captionEffectDuration/1000)."s; }\n";

			$html .= "#ftg-$this->id$rid .tile .tile-inner:before { background-color: $gallery->captionBackgroundColor; }\n";

			$html .= "#ftg-$this->id$rid .tile .tile-inner:before { background-color: rgba($bgCaption[0], $bgCaption[1], $bgCaption[2], ". ($gallery->captionOpacity/100) . "); }\n";

			if($gallery->captionFrame == 'T' && $gallery->captionFrameColor)
				$html .= "#ftg-$this->id$rid .tile .caption-block.frame .text { border-color: ". $gallery->captionFrameColor ."; }\n";

			$loadedEasing = $gallery->loadedEasing;
			if($gallery->loadedEasing == "ease-out-back")
				$loadedEasing = "cubic-bezier(0.175, 0.885, 0.320, 1.275)";
			if($gallery->loadedEasing == "ease-in-out-back")
				$loadedEasing = "cubic-bezier(0.680, -0.550, 0.265, 1.550)";
			if($gallery->loadedEasing == "ease-out-back-accent")
				$loadedEasing = "cubic-bezier(0.000, 1.650, 1.000, 1.650)";
			if($gallery->loadedEasing == "elastic-out")
				$loadedEasing = "cubic-bezier(.26,1.9,.4,.67)";
 

			$html .= "#ftg-$this->id$rid .tile.ftg-preload { transform: scaleY(" .($gallery->loadedScaleY/100) .") scaleX(" .($gallery->loadedScaleX/100) .") translate(" . $gallery->loadedHSlide . 'px,' . $gallery->loadedVSlide . "px) rotateX(" . $gallery->loadedRotateX .  "deg) rotateY(" . $gallery->loadedRotateY .  "deg); }\n";
			$html .= "#ftg-$this->id$rid .tile.ftg-preload { transition: all $loadedEasing " .($gallery->loadedDuration/1000) ."s, opacity linear " .($gallery->loadedDuration/1000) ."s; }\n";
			$html .= "#ftg-$this->id$rid .tile img.item { transition-duration: " .($gallery->hoverDuration/1000) ."s; }\n";

			if($gallery->hoverZoom != 100 || $gallery->hoverRotation != 0)
			{
				$html .= "#ftg-$this->id$rid .tile:hover img {\n";

				foreach($this->cssPrefixes as $prefix)
				{
					$html .= "\t" . $prefix."transform: "
					         . $this->cssRuleRotation($prefix)
					         . $this->cssRuleZoom($prefix)
					         .";\n";
				}

				$html .="}\n";
			}
			if($gallery->hoverIconRotation == 'T')
			{
				$html .= "#ftg-$this->id$rid .tile .icon {\n";

				foreach($this->cssPrefixes as $prefix)
				{
					$html .= "\t" . $prefix."transition: all .5s;\n";
				}

				$html .="}\n";

				$html .= "#ftg-$this->id$rid .tile:hover .icon {\n";

				foreach($this->cssPrefixes as $prefix)
				{
					$html .= "\t" . $prefix."transform: rotate(360deg);\n";
				}

				$html .="}\n";
			}
			if(! empty($gallery->style))
				$html .= stripslashes($gallery->style);

			$html .= "</style>\n";

			$filtersSlugs = array_map("FinalTilesGallery::slugify", explode('|', $gallery->filters));
			$current_filter = isset($_GET['ftg-set']) ? $_GET['ftg-set'] : null;

			if($gallery->captionMobileBehavior == "desktop")
				$gallery->captionMobileBehavior = $gallery->captionBehavior;

			$captionBehavior = wp_is_mobile() ? $gallery->captionMobileBehavior : $gallery->captionBehavior;

			$socialClasses = "";
			if($this->hasSocial())
			{
				$socialClasses .= "social-icons-" . $gallery->socialIconPosition . " social-icons-" . $gallery->socialIconStyle;
			}

			$html .= "<a name='$this->id'></a>";
			$html .= "<div class='final-tiles-gallery $socialClasses ".($gallery->captionFrame == 'T' ? "caption-frame" : "")." caption-$captionBehavior caption-$gallery->captionVerticalAlignment caption-$gallery->captionHorizontalAlignment' id='ftg-$this->id$rid' style='width:$gallery->width'>\n";
			if(strlen($gallery->filters))
			{
				$filters = explode("|", $gallery->filters);

				$filter_url = $gallery->filterClick == 'F' ? '#ftg-set-ftgall' : '?ftg-set=all#'. $this->id;
				$html .= "<div class='ftg-filters'>\n";
				$html .= "\t<a data-filter='all' href='$filter_url' class='selected'>$gallery->allFilterLabel</a>\n";
				foreach($filters as $filter)
				{
					$filter_url = $gallery->filterClick == 'F' ? '#ftg-set-' . FinalTilesGallery::slugify($filter) : '?ftg-set=' . FinalTilesGallery::slugify($filter) . '#'. $this->id;

					$html .= "\t<a data-filter='". $this->slugify($filter) ."' href='$filter_url'>$filter</a>\n";
				}
				$html .= "</div>\n";
			}
			$html .= "<div class='ftg-items'>\n";

			if($gallery->loadMethod == "sequential")
				$html .= "\t<div class='loading-bar'><i></i></div>\n";

			$lightbox = wp_is_mobile() ?
				$gallery->mobileLightbox == "desktop" ? $gallery->lightbox : $gallery->mobileLightbox
				:
				$gallery->lightbox;

			$groups = array();
			
			$html .= $this->images_markup();

			$html .= "</div>\n";

			if($gallery->support == 'T')
			{
				$html .= "<div class='support-text'><a target='_blank' href='https://www.final-tiles-gallery.com/wordpress'>".$gallery->supportText."</a></div>";
			}
			$html .= "</div>\n";

			$html .= "<script type='text/javascript'>\n";			
			if($this->gallery->lightbox != 'lightgallery')
				$html .= "jQuery('#ftg-$this->id$rid img.item').removeAttr('src');\n";
			$html .= "jQuery(document).ready(function () {\n";
			$html .= "setTimeout(function () {\n";
			$html .= "\tjQuery('#ftg-$this->id$rid').finalTilesGallery({\n";
			$html .= "\t\tminTileWidth: $gallery->minTileWidth,\n";
			if(strlen($gallery->script))
			{
				$html .= "\t\tonComplete: function () { " . stripslashes($gallery->script) . "},\n";
			}
			$html .= "\t\tmargin: $gallery->margin,\n";

			$jsLoadMethod = $gallery->loadMethod;
			if($gallery->loadMethod == 'trueLazy')
				$jsLoadMethod = 'lazy';

			$html .= "\t\tloadMethod: '$jsLoadMethod',\n";

			if($gallery->ajaxLoading == 'T')
			{
				$html .= "\t\tautoLoadURL: '" . admin_url( 'admin-ajax.php' ) . "',\n";
				$html .= "\t\tpageSize: $gallery->tilesPerPage,\n";			
			}
			$html .= "\t\tnonce: '".wp_create_nonce('finaltilesgallery')."',\n";
			$html .= "\t\tgalleryId: '{$this->id}',\n";
			$html .= "\t\tsetupFilters: " . ($gallery->filterClick == 'F' ? "true" : "false") . ",\n";
			$html .= "\t\tlayout: '$gallery->layout',\n";
			$html .= "\t\tdebug: ".(empty($_GET['debug']) ? "false" : "true").",\n";
			$html .= "\t\tgridSize: $gallery->gridCellSize,\n";
			$html .= "\t\tdisableGridSizeBelow: $gallery->gridCellSizeDisabledBelow,\n";
			
			$html .= "\t\tallowEnlargement: " . ($gallery->enlargeImages == "T" ? "true" : "false") . ",\n";
			if($gallery->layout == "columns")
			{
				$html .= "\t\tcolumns: [\n" .
				         "\t\t\t[4000, $gallery->columns],\n" .
				         "\t\t\t[1024, $gallery->columnsTabletLandscape],\n" .
				         "\t\t\t[800, $gallery->columnsTabletPortrait],\n" .
				         "\t\t\t[480, $gallery->columnsPhoneLandscape],\n" .
				         "\t\t\t[320, $gallery->columnsPhonePortrait]\n" .
				         "\t\t],";
			}
			else
			{
				$html .= "\t\timageSizeFactor: [\n" .
				         "\t\t\t [4000, " . ($gallery->imageSizeFactor / 100) . "]\n" .
				         "\t\t\t,[1024, " . ($gallery->imageSizeFactorTabletLandscape / 100) . "]\n" .
				         "\t\t\t,[768, " . ($gallery->imageSizeFactorTabletPortrait / 100) . "]\n" .
				         "\t\t\t,[640, " . ($gallery->imageSizeFactorPhoneLandscape / 100) . "]\n" .
				         "\t\t\t,[320, " . ($gallery->imageSizeFactorPhonePortrait / 100) . "]\n";

				foreach(explode("|", $gallery->imageSizeFactorCustom) as $isf)
				{
					$_ = explode(",", $isf);
					if(! empty($_[0]))
						$html .= "\t\t\t,[".$_[0].", " . ($_[1] / 100) . "]\n";
				}

				$html .= "\t\t],\n";
			}
			if(isset($scrollEffect))
				$html .= "\t\tscrollEffect: '"  . ($gallery->scrollEffect) . "',\n";
			$html .= "\t\tselectedFilter: '"  . $this->slugify($gallery->defaultFilter) . "'\n";
			$html .= "\t});\n";

			$html .= "\tjQuery(function () {\n";

			//$html .= "\t\tjQuery('#ftg-$this->id$rid .tile > a').unbind('click');\n";


			if($gallery->disableLightboxGroups == 'T')
			{
				if($lightbox == "prettyphoto" || $lightbox == "fancybox" || $lightbox == "swipebox" || $lightbox == "lightbox2")
				{
					$html .= "jQuery('#ftg-$this->id$rid .tile a.ftg-lightbox').each(function (i) { jQuery(this).attr('rel', 'no-group-' + i);});\n";
				}
				if($lightbox == "lightbox2")
				{
					$html .= "jQuery('#ftg-$this->id$rid .tile a.ftg-lightbox').each(function (i) { jQuery(this).attr('data-lightbox', 'no-group-' + i);});\n";
				}
			}

			$html .= "\t(function () {\n";
			$html .= "\t\tvar rel = '';\n";
			$html .= "\t\tjQuery('#ftg-$this->id$rid .ftg-lightbox').click(function (e) {\n";
			$html .= "\t\t\trel = jQuery(this).attr('rel');\n";
			$html .= "\t\t\tjQuery('#ftg-$this->id$rid .ftg-current').removeClass('ftg-current');\n";
			$html .= "\t\t\tjQuery('#ftg-$this->id$rid [rel=\"'+rel+'\"]').addClass('ftg-current');\n";
			$html .= "\t\t});\n";
			$html .= "\t})();\n";

			switch ($lightbox)
			{
				case 'magnific':
					$html .= "\t\tjQuery('#ftg-$this->id$rid').magnificPopup({type:'image', zoom: {\n";
					$html .= "\t\t\tenabled: true, duration: 300, easing: 'ease-in-out' },\n";
					$html .= "\t\t\timage: { titleSrc: 'data-title' }, gallery: { enabled: ". ($gallery->disableLightboxGroups == 'T' ? "false" : "true") . " }, delegate: '.tile:not(.ftg-hidden) .ftg-lightbox.ftg-current'\n";
					$html .= "\t\t});\n";
					$html .= "\t\tjQuery('#ftg-$this->id$rid .ftg-lightbox-iframe').magnificPopup({type:'iframe' });\n";
					break;
				case 'prettyphoto':
					$html .= "\t\tjQuery('#ftg-$this->id$rid .tile a.ftg-lightbox').prettyPhoto({";
					$html .= "});\n";
					break;
				case 'colorbox':
					$html .= "\t\tjQuery('#ftg-$this->id$rid .tile a.ftg-lightbox').colorbox({";
					$html .= "rel: '". ($gallery->disableLightboxGroups == 'T' ? "nofollow" : $this->id) . "',";
					$html .= "title: function () { return jQuery(this).data('title'); }});\n";
					$html .= "\t\tjQuery('#ftg-$this->id$rid .tile a.ftg-lightbox-iframe').colorbox({ iframe:true, width:'75%', height:'75%' });\n";
					break;
				case 'fancybox':
					$html .= "\t\tjQuery('#ftg-$this->id$rid .tile a.ftg-lightbox').fancybox();\n";
					break;
				case 'swipebox':
					$html .= "\t\tjQuery('#ftg-$this->id$rid .tile a.ftg-lightbox').swipebox({});\n";
					break;
				case 'lightgallery':
					$html .= "\t\tjQuery('#ftg-$this->id$rid').lightGallery({\n\t\t\tselector: '.tile:not(.ftg-hidden) .ftg-lightbox',\n";

					if ( $gallery->disableLightboxGroups == 'T' ) {
						$html .= "\t\t\tthumbnail: false,\n";
						$html .= "\t\t\tcontrols: false,\n";
						$html .= "\t\t\tcounter: false,\n";
						$html .= "\t\t\tautoplayControls: false,\n";
						$html .= "\t\t\tenableDrag: false,\n";
						$html .= "\t\t\tmousewheel: false,\n";
						$html .= "\t\t\tkeyPress: false,\n";
						$html .= "\t\t\tescKey: true,\n";
					}
					$html .= "\t\t\tdummy: false\n";
					$html .= "\t\t});\n";
				case 'lightbox2':
					break;
			}

			$html .= "\n";
			$html .= "\t});\n";
			$html .= "\t}, ". $gallery->delay .");\n";
			$html .= "\t});\n";

			$html .= "</script>";

			$html .= stripslashes($this->gallery->afterGalleryText);

			if(! empty($_GET["debug"]))
				return $html;

			if($gallery->compressHTML == 'T')
				return str_replace(array("\n", "\t"), "", $html);
			else
				return $html;
		}

		public function images_markup()
		{
			$rid = $this->id;

			$gallery = $this->gallery;
			$current_filter = isset($_GET['ftg-set']) ? $_GET['ftg-set'] : null;
			
			$html = "";

			$lightbox = wp_is_mobile() ?
				$gallery->mobileLightbox == "desktop" ? $gallery->lightbox : $gallery->mobileLightbox
				:
				$gallery->lightbox;

			$groups = array();
			foreach($this->images as $image)
			{
				$img_filters = array_map("FinalTilesGallery::slugify", explode('|', $image->filters));
				if($gallery->filterClick == "T" && ($current_filter != 'all' && $current_filter != null && ! in_array($current_filter, $img_filters)))
				{
					continue;
				}

				$title = in_array($gallery->lightbox, array('prettyphoto', 'fancybox', 'swipebox', 'lightbox2')) ? "title" : "data-title";

				if($lightbox == 'lightgallery' && $this->useCaptions())
					$title = 'data-sub-html';

				$rel = $lightbox == "prettyphoto" ? "prettyPhoto[ftg-$this->id$rid]" : "ftg-$this->id$rid";

				if($gallery->rel)
					$rel = $gallery->rel;

				if(isset($image->group))
				{
					$rel = $lightbox == "prettyphoto" ? "prettyPhoto[$image->group]" : $image->group;
					$groups[$image->group] = 1;
				}
				else
				{
					$groups["ftg-$this->id$rid"] = 1;
				}

				if(wp_is_mobile() && $gallery->mobileLightbox == "lightbox2")
					$rel = "lightbox";

				$data_keep_aspect_ratio = "";
				if(property_exists($image, "type") && $image->type == "video")
					$data_keep_aspect_ratio = 'data-ftg-keep-aspect-ratio="true"';

				if(!property_exists($image, "filters"))
					$image->filters = "";

				$hiddenClass = isset($image->hidden) && $image->hidden == "T" ? "ftg-hidden-tile" : "";
				$html .= "<div $data_keep_aspect_ratio class='tile ftg-preload $hiddenClass ". FinalTilesGallery::getFilters($image->filters) ."'>\n";

				if(property_exists($image, "type") && $image->type == "video")
				{
					$html .= "<div class='fitvidsignore'>";
					$html .= $image->imagePath;
					$html .= "</div>";
				}
				else
				{
					//$src = $gallery->sequentialImageLoading == "T" ? "" : $image->imagePath;
					$src = $image->imagePath;
					if(wp_is_mobile())
						$src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7";
					$description = (isset($image->title) && !empty($image->title)) ? $image->title : $image->description;

					$title_text = htmlspecialchars($description, ENT_QUOTES);
					if($lightbox == 'lightgallery' && $this->useCaptions())
						$title_text = "<span class='title'>$image->title</span><span class='text'>$image->description</span>";


					$html .= "<a $title=\"".$title_text."\" ". (($gallery->lightbox == "lightbox2" ) && empty($image->link) ? "data-lightbox='$rel'" : "") ." rel='$rel' " . ($this->getTarget($image)) . " class=' tile-inner " . $gallery->aClass . " " . ($this->getLightboxClass($image)) . "' " . $this->getLink($image) . " " . ($lightbox == "lightgallery" ? "data-download-url='$image->original'" : '') . ">\n";

					if(! isset($image->width))
						$image->width = "auto";
					if(! isset($image->height))
						$image->height = "auto";
					if(! isset($image->alt))
						$image->alt = $description;

					$html .= "<img alt='$image->alt' class='item' data-class='item' data-ftg-src='$image->imagePath' src='$src' width='$image->width' height='$image->height' />\n";

					if($gallery->captionPosition == 'inside')
					{
							if(
								(! (empty($image->description) && empty($image->title) ) && 
									$this->useCaptions()
								) || 
								$gallery->captionEmpty == "show" || 
								$this->hasCaptionIcon()
							)
						{
							if($this->hasCaptionIcon())
								$html .= "\t<span class='icon fa fa-".$this->getCaptionIcon()."'></span>\n";

							$html .= "<div class='caption-block'>\n";							

							if($gallery->source == "images" && $this->useCaptions())
							{
								$html .= "\t<div class='text-wrapper'>\n";
								if( ! empty($image->title) && $gallery->wp_field_title != "none")
									$html .= "<span class='title'>".$image->title."</span>\n";

								if( ! empty($image->description) && $gallery->wp_field_caption != "none")
									$html .= "\t<span class='text'>$image->description</span>\n";
								$html .= "\t</div>\n";
							}

							if(($gallery->source == "posts" || $gallery->source == "woocommerce") && $this->useCaptions())
							{
								$html .= "\t<div class='text-wrapper'>\n";
								$html .= "\t\t<span class='text'>$image->description</span>\n";
								$html .= "\t</div>\n";
							}
							$html .= "</div>\n";
						}
					}
					$html .= "</a>\n";
					if($gallery->captionPosition == 'outside')
					{
						if((! (empty($image->description) && empty($image->title) ) && $this->useCaptions()))
						{
							$html .= "<span class='caption-outside'>\n";

							if($gallery->source == "images")
							{
								$html .= "\t<span>\n";
								if( ! empty($image->title) && $this->useCaptions())
									$html .= "<span class='title'>".$image->title."</span>\n";

								if( ! empty($image->description) && $this->useCaptions())
									$html .= "\t<span class='text'>$image->description</span>\n";
								$html .= "\t</span>\n";
							}

							if(($gallery->source == "posts" || $gallery->source == "woocommerce") && $this->useCaptions())
							{
								$html .= "\t<span class='text'>$image->description</span>\n";
							}
							$html .= "</span>\n";
						}
					}
					if($gallery->source == "woocommerce")
					{
						$html .= "<div class='woo'>";
						$html .= "\t<span class='price'>". $image->price . get_woocommerce_currency_symbol() . "</span>\n";
						$html .= "\t<a href='".get_site_url()."/cart/?add-to-cart=".$image->postID ."'><i class='fa fa-shopping-cart add-to-cart'></i></a>";
						$html .= "</div>";
					}
					$html .= "<div class='ftg-social'>\n";

					if($gallery->enableFacebook == "T")
					{
						$html .= "<a href='#' data-social='facebook' class='ftg-facebook'><i class='fa fa-facebook'></i></a>\n";
					}
					if($gallery->enableTwitter == "T")
					{
						$html .= "<a href='#' data-social='twitter' class='ftg-twitter'><i class='fa fa-twitter'></i></a>\n";
					}
					if($gallery->enablePinterest == "T")
					{
						$html .= "<a href='#' data-social='pinterest' class='ftg-pinterest'><i class='fa fa-pinterest'></i></a>\n";
					}
					if($gallery->enableGplus == "T")
					{
						$html .= "<a href='#' data-social='google-plus' class='ftg-google-plus'><i class='fa fa-google-plus'></i></a>\n";
					}
					$html .= "</div>\n";
				}

				$html .= "</div>\n";
			}

			return $html;
		}

		private function auto_excerpt($post, $length, $excerpt_ending)
		{
			$text = strip_shortcodes($post->post_content);
			$text = apply_filters('the_content', $text);
			$text = str_replace('\]\]\>', ']]&gt;', $text);
			$text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
			$text = strip_tags($text);
			$words = explode(' ', $text, $length + 1);

			if (count($words) > $length)
			{
				array_pop($words);
				$text = implode(' ', $words);
				if($excerpt_ending !== 'none')
				{
					$text .= strtr($excerpt_ending, array("(" => "[", ")" => "]"));
				}
			}
			$text = trim($text);
			if(strlen($text) !== strlen($excerpt_ending))
			{
				return $text;
			}
			else
			{
				return '';
			}
		}

		public function getWooProducts()
		{
			$args = array(
				'order' 				=> 'DESC',
				'orderby' 				=> 'date',
				'post_status'			=> array('publish'),
				'meta_query'			=> '_thumbnail_id',
				'ignore_sticky_posts' 	=> 1,
				'nopaging'				=> true,
				'post_type'				=> 'product'
			);

			if($this->gallery->woo_categories)
			{
				$args['tax_query'] = array(
					array(
						'taxonomy'      => 'product_cat',
						'field' 		=> 'term_id',
						'terms'         => explode(",", $this->gallery->woo_categories),
						'operator'      => 'IN'
					)
				);
			}

			$posts = get_posts($args);

			$imageResults = array();
//          print_r($posts);
			foreach ($posts as &$post)
			{
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				if($post_thumbnail_id)
				{
					$item = new stdClass;
					$item->attID = $post_thumbnail_id;
					$item->imageId = $item->attID;
					$item->imagePath = get_post_meta( $post->ID, 'ftg_image_url', true);
					$item->filters = get_post_meta( $post->ID, 'ftg_filters', true);
					$item->price = get_post_meta( $post->ID, '_price', true);
					$item->description = $post->post_title;
					$item->postID = $post->ID;

					if(empty($item->imagePath))
					{
						$attr = wp_get_attachment_image_src( $post_thumbnail_id, $this->gallery->defaultWooImageSize);
						$item->imagePath = $attr[0];
					}

					if($this->gallery->lightbox == "post")
						$item->link = get_permalink($post->ID);

					$this->images[] = $item;
					//unset($post, $post_thumbnail_id);
				}
			}
		}

		public function getPosts()
		{
			$noPaging = true;
			$postsPerPage = 0;
			$page = 1;

			if($this->gallery->ajaxLoading == "T")
			{
				$noPaging = false;
				$postsPerPage = $this->gallery->tilesPerPage;				
				$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
			}
			else
			{
				$noPaging = $this->gallery->max_posts == 0;				
				if(! $noPaging)
				{
					$postsPerPage = $this->gallery->max_posts;
					$page = 1;
				}
			}

			$args = array(
				'order' 				=> 'DESC',
				'orderby' 				=> 'date',
				'post_status'			=> array('publish'),
				'meta_query'			=> '_thumbnail_id',
				'ignore_sticky_posts' 	=> 1,
				'nopaging'				=> $noPaging,
				'posts_per_page'		=> $postsPerPage,
				'paged'					=> $page,
				'meta_query' => array( 
										array(
											'key' => '_thumbnail_id'
										) 
									)
			);

			if($this->gallery->post_types)
				$args['post_type'] = explode(",", $this->gallery->post_types);


			if($this->gallery->post_categories)
				$args['category__in'] = $this->gallery->post_categories;

			$posts = get_posts($args);
			$imageResults = array();

			foreach ($posts as &$post)
			{
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);

				if($post_thumbnail_id)
				{
					$item = new stdClass;
					$item->attID = $post_thumbnail_id;
					$item->imageId = $post_thumbnail_id;
					$item->imagePath = get_post_meta( $post->ID, 'ftg_image_url', true);
					$item->filters = get_post_meta( $post->ID, 'ftg_filters', true);

					switch($this->gallery->recentPostsCaption)
					{
						case "title":
							$item->description = $post->post_title;
							break;
						case "excerpt":
							$item->description = $post->post_excerpt;
							break;
						case "auto-excerpt":
							$item->description = $this->auto_excerpt($post, $this->gallery->recentPostsCaptionAutoExcerptLength, "...");
							break;
					}

					if(empty($item->imagePath))
					{
						$attr = wp_get_attachment_image_src( $post_thumbnail_id, $this->gallery->defaultPostImageSize);
						$item->imagePath = $attr[0];
					}

					if($this->gallery->lightbox == 'post')
						$item->link = get_permalink($post->ID);

					$this->images[] = $item;
					// unset($post, $post_thumbnail_id);
				}
			}
		}

		public function getImages()
		{
			$skip = 0;
			$size = 0;

			if($this->gallery->ajaxLoading == "T")
			{
				$size = $this->gallery->tilesPerPage;
				$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
				$skip = ($page - 1) * $size;
			}

			$images = $this->db->getImagesByGalleryId($this->id, $skip, $size);

			$this->images = array();
			foreach($images as $image)
			{
				$image->source = "gallery";
				$image->attID = $image->imageId;
				$this->images[] = $image;
			}
			return $this->images;
		}

		public function getGallery()
		{
			if($this->gallery == null)
			{
				$this->gallery = $this->db->getGalleryById($this->id);

				foreach ( $this->defaultValues as $k => $v )
				{
					if(! isset($this->gallery->$k) && isset($v))
						$this->gallery->$k = $v;
				}

				if(! empty($_GET["debug"]))
				{
					$debug = (array) $this->gallery;
					$fields = array_keys($debug);
					sort($fields);
					print "\n<!-- \n";
					foreach ($fields as $item )
					{
						echo "\t[$item] : $debug[$item]\n";
					}
					print "\n -->\n";
				}
			}
			return $this->gallery;
		}
	}
}
?>