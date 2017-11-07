<?php

$this->fields = array(
    "General"              => array(
    "icon"   => "mdi-settings",
    "fields" => array(),
),
    "Links & Lightbox"     => array(
    "icon"   => "mdi-link-variant",
    "fields" => array(),
),
    "Captions"             => array(
    "icon"   => "mdi-comment-text-outline",
    "fields" => array(),
),
    "Hover effects"        => array(
    "icon"    => "mdi-file-image",
    "presets" => array(
    "Slow zoom in"    => array(
    "hoverDuration" => 60000,
    "hoverZoom"     => 400,
    "hoverRotation" => 0,
),
    "Zoom in"         => array(
    "hoverDuration" => 250,
    "hoverZoom"     => 200,
    "hoverRotation" => 0,
),
    "Swirl in"        => array(
    "hoverZoom"     => 200,
    "hoverRotation" => 20,
),
    "Swirl in super"  => array(
    "hoverZoom"     => 200,
    "hoverRotation" => 360,
),
    "Zoom out"        => array(
    "hoverZoom"     => 50,
    "hoverRotation" => 0,
),
    "Swirl out"       => array(
    "hoverZoom"     => 50,
    "hoverRotation" => -20,
),
    "Swirl out super" => array(
    "hoverZoom"     => 50,
    "hoverRotation" => -360,
),
),
    "fields"  => array(),
),
    "Image loaded effects" => array(
    "icon"    => "mdi-reload",
    "presets" => array(
    "Wobble"            => array(
    "loadedDuration" => 600,
    "loadedEasing"   => "elastic-out",
    "loadedScaleY"   => 50,
    "loadedScaleX"   => 50,
    "loadedRotateY"  => 0,
    "loadedRotateX"  => 0,
    "loadedVSlide"   => 0,
    "loadedHSlide"   => 0,
),
    "Windows"           => array(
    "loadedDuration" => 600,
    "loadedEasing"   => "elastic-out",
    "loadedRotateY"  => -120,
    "loadedScaleY"   => 100,
    "loadedScaleX"   => 100,
    "loadedRotateX"  => 0,
    "loadedVSlide"   => 0,
    "loadedHSlide"   => 0,
),
    "Cards"             => array(
    "loadedDuration" => 600,
    "loadedEasing"   => "ease-in-out",
    "loadedRotateX"  => -120,
    "loadedRotateY"  => -120,
    "loadedScaleY"   => 100,
    "loadedScaleX"   => 0,
    "loadedVSlide"   => 0,
    "loadedHSlide"   => 0,
),
    "Slide from bottom" => array(
    "loadedDuration" => 250,
    "loadedEasing"   => "ease-out",
    "loadedRotateX"  => 0,
    "loadedRotateY"  => 0,
    "loadedScaleY"   => 100,
    "loadedScaleX"   => 100,
    "loadedVSlide"   => 100,
    "loadedHSlide"   => 0,
),
    "Slide from left"   => array(
    "loadedDuration" => 250,
    "loadedEasing"   => "ease-out",
    "loadedRotateX"  => 0,
    "loadedRotateY"  => 0,
    "loadedScaleY"   => 100,
    "loadedScaleX"   => 100,
    "loadedVSlide"   => 0,
    "loadedHSlide"   => -100,
),
    "Elastic skew"      => array(
    "loadedDuration" => 800,
    "loadedEasing"   => "elastic-out",
    "loadedRotateX"  => 0,
    "loadedRotateY"  => -180,
    "loadedScaleY"   => 200,
    "loadedScaleX"   => 100,
    "loadedVSlide"   => 300,
    "loadedHSlide"   => 0,
),
    "Flying doors"      => array(
    "loadedDuration" => 800,
    "loadedEasing"   => "ease-out-back",
    "loadedRotateX"  => -180,
    "loadedRotateY"  => 0,
    "loadedScaleY"   => 100,
    "loadedScaleX"   => 300,
    "loadedVSlide"   => -500,
    "loadedHSlide"   => -800,
),
    "Pop"               => array(
    "loadedDuration" => 300,
    "loadedEasing"   => "ease-in-out",
    "loadedRotateX"  => 0,
    "loadedRotateY"  => 0,
    "loadedScaleY"   => 1,
    "loadedScaleX"   => 1,
    "loadedVSlide"   => 0,
    "loadedHSlide"   => 0,
),
),
    "fields"  => array(),
),
    "Style"                => array(
    "icon"   => "mdi-format-paint",
    "fields" => array(),
),
    "Customizations"       => array(
    "icon"   => "mdi-puzzle",
    "fields" => array(),
),
);
$this->addField( "General", "name", array(
    "name"        => "Name",
    "hiddenFor"   => array( "dashboard", "shortcode" ),
    "type"        => "text",
    "description" => "Name of the gallery, for internal use.",
    "proCall"     => false,
    "excludeFrom" => array( "dashboard", "shortcode" ),
) );
$this->addField( "General", "description", array(
    "name"        => "Description",
    "hiddenFor"   => array( "dashboard", "shortcode" ),
    "type"        => "text",
    "description" => "Description of the gallery, for internal use.",
    "proCall"     => false,
    "excludeFrom" => array( "dashboard", "shortcode" ),
) );
$this->addField( "General", "layout", array(
    "name"        => "Layout",
    "type"        => "select",
    "description" => "<strong>Final Tiles</strong>: use images with different sizes<br><strong>Masonry</strong>: multi-column layout, use this one if you need images of the same size.",
    "values"      => array(
    "Layout" => array( "final|Final Tiles", "columns|Masonry" ),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "width", array(
    "name"        => "Width",
    "type"        => "text",
    "description" => "Width of the gallery in pixels or percentage.",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "margin", array(
    "name"        => "Margin",
    "type"        => "number",
    "description" => "Margin between images",
    "mu"          => "px",
    "min"         => 0,
    "max"         => 50,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "columns", array(
    "name"        => "Number of columns",
    "type"        => "number",
    "description" => "",
    "mu"          => "",
    "min"         => 1,
    "max"         => 50,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "columnsTabletLandscape", array(
    "name"        => "Number of columns (Tablet landscape)",
    "type"        => "number",
    "description" => "",
    "mu"          => "",
    "min"         => 1,
    "max"         => 50,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "columnsTabletPortrait", array(
    "name"        => "Number of columns (Tablet portrait)",
    "type"        => "number",
    "description" => "",
    "mu"          => "",
    "min"         => 1,
    "max"         => 50,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "columnsPhoneLandscape", array(
    "name"        => "Number of columns (Phone landscape)",
    "type"        => "number",
    "description" => "",
    "mu"          => "",
    "min"         => 1,
    "max"         => 50,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "columnsPhonePortrait", array(
    "name"        => "Number of columns (Phone portrait)",
    "type"        => "number",
    "description" => "",
    "mu"          => "",
    "min"         => 1,
    "max"         => 50,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "imageSizeFactor", array(
    "name"        => "Image size factor",
    "type"        => "slider",
    "description" => "Percentage of image size, i.e.: if an image of the gallery is 300x200 and the size factor is 50% then the resulting image will be 150x100.\n            90% is a suggested default value, because under some circumstances, the images could be enlarged by the script (to fill gaps and avoid blank spaces between tiles).",
    "default"     => 90,
    "min"         => 1,
    "max"         => 100,
    "mu"          => "%",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "imageSizeFactorTabletLandscape", array(
    "name"        => "Image size factor (Tablet Landscape)",
    "type"        => "slider",
    "description" => "Image size factor to apply when the viewport is 1024px, typically for tablets with landscape orientation",
    "default"     => 80,
    "min"         => 1,
    "max"         => 100,
    "mu"          => "%",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "imageSizeFactorTabletPortrait", array(
    "name"        => "Image size factor Tablet Portrait",
    "type"        => "slider",
    "description" => "Image size factor to apply when the viewport is 768px, typically for tablets with portrait orientation",
    "default"     => 70,
    "min"         => 1,
    "max"         => 100,
    "mu"          => "%",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "imageSizeFactorPhoneLandscape", array(
    "name"        => "Image size factor Smartphone Landscape",
    "type"        => "slider",
    "description" => "Image size factor to apply when the viewport is 640px, typically for smartphones with landscape orientation",
    "default"     => 60,
    "min"         => 1,
    "max"         => 100,
    "mu"          => "%",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "imageSizeFactorPhonePortrait", array(
    "name"        => "Image size factor Phone Portrait",
    "type"        => "slider",
    "description" => "Image size factor to apply when the viewport is 320px, typically for smartphones with portrait orientation",
    "default"     => 50,
    "min"         => 1,
    "max"         => 100,
    "mu"          => "%",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "imageSizeFactorCustom", array(
    "name"        => "Custom image size factor",
    "hiddenFor"   => array( "dashboard", "shortcode" ),
    "type"        => FinalTiles_Gallery::getFieldType( "custom_isf" ),
    "description" => "Use this field if you need further resolutions. Make custom layout for any device and resolution.",
    "proCall"     => true,
    "excludeFrom" => array( "dashboard", "shortcode" ),
) );
$this->addField( "General", "minTileWidth", array(
    "name"        => "Tile minimum width",
    "type"        => "number",
    "description" => "Minimum width of each tile, <strong>multiply this value for the image size factor to get the real size</strong>.",
    "mu"          => "px",
    "min"         => 50,
    "max"         => 500,
    "default"     => 200,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "imagesOrder", array(
    "name"        => "Images order",
    "type"        => "select",
    "description" => "Choose the order of the images",
    "default"     => "",
    "values"      => array(
    "Images order" => array( "user|User", "reverse|Reverse", "random|Random" ),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "filter", array(
    "name"        => "Filters",
    "type"        => FinalTiles_Gallery::getFieldType( "filter" ),
    "description" => "Manage here all the filters of this gallery",
    "proCall"     => true,
    "excludeFrom" => array( "dashboard", "shortcode" ),
) );
$this->addField( "General", "gridCellSize", array(
    "name"        => "Size of the grid",
    "type"        => "number",
    "default"     => 25,
    "min"         => 1,
    "max"         => 100,
    "mu"          => "px",
    "description" => "Tiles are snapped to a virtual grid, <strong>the higher this value the higher the chance to get bottom aligned tiles</strong> (but it needs to crop vertically).",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "gridCellSizeDisabledBelow", array(
    "name"        => "Disable grid size below resolution",
    "type"        => "number",
    "default"     => 800,
    "min"         => 0,
    "max"         => 4000,
    "mu"          => "px",
    "description" => "If you have small tiny images under certain resolutions then you can switch off grid size (image cropping) when the screen resolution is below this value.",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "General", "enlargeImages", array(
    "name"        => "Allow image enlargement",
    "type"        => "toggle",
    "description" => "Images can be occasionally enlarged to avoid gaps. If you notice a quality loss try to reduce the <strong>Image size factor</strong> parameter.",
    "default"     => "T",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
/*"scrollEffect" , array(
"name" => "Scroll effect",
"type" => "select",
"description" => "Effect on tiles when scrolling the page",
"values" => array(
"Scroll effect" => array(
"none|None", "slide|Sliding tiles", "zoom|Zoom", "rotate-left|Left rotation", "rotate-right|Right rotation"
)
),
"proCall" => false,
    "excludeFrom" => array()
));*/
$this->addField( "General", "compressHTML", array(
    "name"        => "Compress HTML",
    "type"        => "toggle",
    "description" => "Enable or disable HTML compression, some themes prefer uncompressed, switch it off in case of problems.",
    "default"     => "T",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "lightbox", array(
    "name"        => "Lightbox &amp; Links",
    "type"        => "select",
    "description" => "Define here what happens when user click on the images. Lightboxes with video support: EverlightBox, LightGallery, Magnific popup, Colorbox (require embed URL)); PrettyPhoto, FancyBox (require embed URL)",
    "values"      => array(
    "Link"       => array( " |No link", "direct|Direct link to image (useful for external lightboxes)|disabled", "post|Post or WooCommerce product|disabled" ),
    "Lightboxes" => array(
    "lightbox2|Lightbox",
    "everlightbox|EverlightBox + social sharing and comments",
    "lightgallery|LightGallery|disabled",
    "magnific|Magnific popup|disabled",
    "colorbox|ColorBox|disabled",
    "prettyphoto|PrettyPhoto|disabled",
    "fancybox|FancyBox|disabled",
    "swipebox|SwipeBox|disabled"
),
),
    "proCall"     => true,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "mobileLightbox", array(
    "name"        => "Lightbox &amp; Links",
    "type"        => "select",
    "description" => "Define here what happens when user click on the images. Lightboxes with video support: EverlightBox, LightGallery, Magnific popup, Colorbox (require embed URL)); PrettyPhoto, FancyBox (require embed URL)",
    "values"      => array(
    "Link"       => array( " |No link", "direct|Direct link to image (useful for external lightboxes)", "post|Post or WooCommerce product|disabled" ),
    "Lightboxes" => array(
    "lightbox2|Lightbox",
    "everlightbox|EverlightBox + social sharing and comments",
    "lightgallery|LightGallery|disabled",
    "magnific|Magnific popup|disabled",
    "colorbox|ColorBox|disabled",
    "prettyphoto|PrettyPhoto|disabled",
    "fancybox|FancyBox|disabled",
    "swipebox|SwipeBox|disabled"
),
),
    "proCall"     => true,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "lightboxImageSize", array(
    "name"        => "Image size for the lightbox",
    "type"        => "select",
    "description" => "",
    "values"      => array(
    "Size" => array(),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "disableLightboxGroups", array(
    "name"        => "Disable lightbox grouping",
    "type"        => "toggle",
    "description" => "Flag this option if you don't want to group images when opened in a lightbox.",
    "default"     => "F",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "blank", array(
    "name"        => "Links target",
    "type"        => "toggle",
    "description" => "Open links in a blank page.",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "enableTwitter", array(
    "name"        => "Enable Twitter icon",
    "type"        => "toggle",
    "description" => "Enable Twitter sharing.",
    "default"     => "F",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "enableFacebook", array(
    "name"        => "Enable Facebook icon",
    "type"        => "toggle",
    "description" => "Enable Facebook sharing. Note: after the last version of OpenGraph API it's not possible to share a specific image anymore.",
    "default"     => "F",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "enableGplus", array(
    "name"        => "Enable Google Plus icon",
    "type"        => "toggle",
    "description" => "Enable Google Plus sharing",
    "default"     => "F",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "enablePinterest", array(
    "name"        => "Enable Pinterest icon",
    "type"        => "toggle",
    "description" => "Enable Pinterest sharing",
    "default"     => "F",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "socialIconColor", array(
    "name"        => "Color of social sharing icons",
    "type"        => "color",
    "description" => "Set the color of the social sharing icons",
    "default"     => "#ffffff",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "socialIconStyle", array(
    "name"        => "Style of the social icons panel",
    "type"        => "select",
    "description" => "Set the color of the social sharing icons",
    "default"     => "none",
    "values"      => array(
    "Style" => array( "none|None", "circle|Circles", "bar|Bar" ),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Links & Lightbox", "socialIconPosition", array(
    "name"        => "Position of the social icons panel",
    "type"        => "select",
    "description" => "Set the position of the social sharing icons",
    "default"     => "bottom",
    "values"      => array(
    "Position" => array( "bottom|Bottom", "right|Right" ),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionBehavior", array(
    "name"        => "Caption behavior",
    "type"        => "select",
    "description" => "Effect used to show the captions.",
    "values"      => array(
    "Effect" => array(
    "none|Fade in",
    "fixed|Fixed|disabled",
    "fixed-bg|Fixed with background|disabled",
    "fixed-then-hidden|Fixed, hidden on mouse hover|disabled",
    "fixed-bottom|Fixed at bottom|disabled",
    "slide-from-top|Slide from top|disabled",
    "slide-from-bottom|Slide from bottom|disabled"
),
),
    "proCall"     => true,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionMobileBehavior", array(
    "name"        => "Caption mobile behavior",
    "type"        => "select",
    "description" => "Caption behavior for mobile devices.",
    "values"      => array(
    "Behavior" => array(
    "desktop|Same as desktop",
    "none|Never show captions|disabled",
    "fixed-bg|Fixed with background|disabled",
    "fixed-bottom|Fixed at bottom|disabled",
    "fixed-then-hidden|Visible, hidden on touch|disabled"
),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionPosition", array(
    "name"        => "Position",
    "type"        => "select",
    "description" => "Choose the position of the caption.",
    "values"      => array(
    "Behavior" => array( "inside|Inside", "outside|Outside (EXPERIMENTAL)" ),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
/*"captionFullHeight" , array(
"name" => "Caption full height",
"type" => "toggle",
"description" => "Enable this option for full height captions. <strong>This is required if you want to use caption icons and caption effects other than <i>fade</i>.</strong>",
"default" => "T",
"proCall" => false,
    "excludeFrom" => array()
));*/
$this->addField( "Captions", "captionEmpty", array(
    "name"        => "Empty captions",
    "type"        => "select",
    "description" => "Choose if empty caption has to be shown.",
    "values"      => array(
    "Empty captions" => array( "hide|Don't show empty captions", "show|Show empty captions|disabled" ),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionIcon", array(
    "name"        => "Caption icon",
    "type"        => "select",
    "description" => "Choose the icon for the captions.",
    "values"      => array(
    "Icon" => array(
    "|None",
    "search|Lens",
    "search-plus|Lens (plus)",
    "link|Link",
    "heart|Heart",
    "heart-o|Heart empty",
    "camera|Camera",
    "camera-retro|Camera retro",
    "picture-o|Picture",
    "star|Star",
    "star-o|Star empty",
    "sun-o|Sun",
    "arrows-alt|Arrows",
    "hand-o-right|Hand"
),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "customCaptionIcon", array(
    "name"        => "Custom caption icon",
    "type"        => FinalTiles_Gallery::getFieldType( "customCaptionIcon" ),
    "description" => "Use this field to insert the class of a FontAwesome icon (i.e.: fa-heart). <a href='http://fontawesome.io/icons/' target='blank'>See all available icons</a>. <strong>This value override the <i>Caption icon</i> value</strong>.",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionIconColor", array(
    "name"        => "Caption icon color",
    "type"        => "color",
    "description" => "Color of the icon in captions.",
    "default"     => "#ffffff",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionIconSize", array(
    "name"        => "Caption icon size",
    "type"        => "number",
    "description" => "Size of the icon in captions.",
    "default"     => 12,
    "min"         => 10,
    "max"         => 96,
    "mu"          => "px",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionFontSize", array(
    "name"        => "Caption font size",
    "type"        => "number",
    "description" => "Size of the font in captions.",
    "default"     => 12,
    "min"         => 10,
    "max"         => 96,
    "mu"          => "px",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionEasing", array(
    "name"        => "Caption effect easing",
    "type"        => "select",
    "description" => "Easing function for the caption animation, works better with sliding animations.",
    "values"      => array(
    "Easing" => array(
    "ease|Ease",
    "linear|Linear|disabled",
    "ease-in|Ease in|disabled",
    "ease-out|Ease out|disabled",
    "ease-in-out|Ease in and out|disabled"
),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionFrame", array(
    "name"        => "Caption frame",
    "type"        => "toggle",
    "description" => "Add a frame around the caption",
    "default"     => "F",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionFrameColor", array(
    "name"        => "Caption frame color",
    "type"        => "color",
    "description" => "Color of the frame around the caption",
    "default"     => "#ffffff",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionColor", array(
    "name"        => "Caption color",
    "type"        => "color",
    "description" => "Text color of the captions.",
    "default"     => "#ffffff",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionEffectDuration", array(
    "name"        => "Caption effect duration",
    "type"        => "text",
    "description" => "Duration of the caption animation.",
    "default"     => 250,
    "mu"          => "ms",
    "min"         => 0,
    "max"         => 1000,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionBackgroundColor", array(
    "name"        => "Caption background color",
    "type"        => "color",
    "description" => "Caption background color",
    "default"     => "#000000",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionOpacity", array(
    "name"        => "Caption opacity",
    "type"        => "text",
    "description" => "Opacity of the caption, 0% means 'invisible' while 100% is a plain color without opacity.",
    "default"     => 80,
    "min"         => 0,
    "max"         => 100,
    "mu"          => "%",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "wp_field_caption", array(
    "name"        => "WordPress caption field",
    "type"        => "select",
    "description" => "WordPress field used for captions. <strong>This field is used ONLY when images are added to the gallery, </strong> however, if you want to ignore captions just set it to '<i>Don't use captions</i>'.",
    "values"      => array(
    "Field" => array(
    "none|Don't use captions",
    "title|Title",
    "caption|Caption",
    "description|Description"
),
),
    "proCall"     => false,
    "excludeFrom" => array( "shortcode" ),
) );
$this->addField( "Captions", "wp_field_title", array(
    "name"        => "WordPress title field",
    "type"        => "select",
    "description" => "WordPress field used for titles. <strong>This field is used ONLY when images are added to the gallery, </strong> however, if you want to ignore titles just set it to '<i>Don't use titles</i>'.",
    "values"      => array(
    "Field" => array( "none|Don't use titles", "title|Title", "description|Description" ),
),
    "proCall"     => false,
    "excludeFrom" => array( "shortcode" ),
) );
$this->addField( "Captions", "recentPostsCaption", array(
    "name"        => "Recent posts caption",
    "type"        => "select",
    "description" => "Field of the post used for captions when using \"Recent posts\" as source.",
    "values"      => array(
    "Field" => array(
    "none|Don't use captions",
    "title|Title",
    "excerpt|Excerpt",
    "auto-excerpt|Auto excerpt"
),
),
    "proCall"     => false,
    "excludeFrom" => array( "shortcode" ),
) );
$this->addField( "Captions", "recentPostsCaptionAutoExcerptLength", array(
    "name"        => "Max number of words for 'Auto excerpt'",
    "type"        => "text",
    "description" => "Define the max number of words of the caption when <i>Recent posts caption</i> is set to <i>Auto excerpt</i>.",
    "default"     => "20",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionVerticalAlignment", array(
    "name"        => "Caption Vertical Alignment",
    "type"        => "select",
    "description" => "Choose the vertical alignment of the caption",
    "values"      => array(
    "Caption vertical alignment" => array( "top|Top", "middle|Middle", "bottom|Bottom" ),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "captionHorizontalAlignment", array(
    "name"        => "Caption Horizontal Alignment",
    "type"        => "select",
    "description" => "Choose the horizontal alignment of the caption",
    "values"      => array(
    "Caption horizontal alignment" => array( "left|Left", "center|Center", "right|Right" ),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Captions", "titleFontSize", array(
    "name"        => "Title font size",
    "type"        => "number",
    "description" => "Size of the font in captions.",
    "min"         => 10,
    "max"         => 96,
    "mu"          => "px",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Hover effects", "hoverZoom", array(
    "name"        => "Zoom",
    "type"        => FinalTiles_gallery::getFieldType( "hoverZoom" ),
    "description" => "Scale value.",
    "default"     => 100,
    "min"         => 0,
    "max"         => 600,
    "mu"          => "%",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Hover effects", "hoverRotation", array(
    "name"        => "Rotation",
    "type"        => FinalTiles_gallery::getFieldType( "hoverRotation" ),
    "description" => "Rotation value in degrees.",
    "min"         => 0,
    "max"         => 360,
    "mu"          => "deg",
    "default"     => 0,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Hover effects", "hoverDuration", array(
    "name"        => "Duration",
    "description" => "",
    "type"        => FinalTiles_gallery::getFieldType( "hoverDuration" ),
    "min"         => 10,
    "max"         => 60000,
    "mu"          => "ms",
    "default"     => 500,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Hover effects", "hoverIconRotation", array(
    "name"        => "Rotate icon",
    "type"        => "toggle",
    "default"     => "F",
    "description" => "Enable rotation of the icon.",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Image loaded effects", "loadedDuration", array(
    "name"        => "Duration",
    "description" => "",
    "type"        => "slider",
    "min"         => 10,
    "max"         => 1000,
    "mu"          => "ms",
    "default"     => 500,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Image loaded effects", "loadedEasing", array(
    "name"        => "Easing curve",
    "type"        => "select",
    "description" => "Choose the easing curve for the loading effect animation",
    "values"      => array(
    "Easing curve" => array(
    "linear|Linear",
    "ease-in|Ease in",
    "ease-out|Ease out",
    "ease-in-out|Ease in and out",
    "ease-out-back|Ease out back",
    "ease-in-out-back|Ease in and out back",
    "ease-out-back-accent|Ease out back (accent)",
    "elastic-out|Elastic out"
),
),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Image loaded effects", "loadedScaleY", array(
    "name"        => "Vertical scaling",
    "description" => "",
    "type"        => "slider",
    "min"         => 1,
    "max"         => 300,
    "mu"          => "%",
    "default"     => 100,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Image loaded effects", "loadedScaleX", array(
    "name"        => "Horizontal scaling",
    "description" => "",
    "type"        => "slider",
    "min"         => 1,
    "max"         => 300,
    "mu"          => "%",
    "default"     => 100,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Image loaded effects", "loadedRotateY", array(
    "name"        => "Vertical rotation",
    "description" => "",
    "type"        => "slider",
    "min"         => -180,
    "max"         => 180,
    "default"     => 0,
    "mu"          => "deg",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Image loaded effects", "loadedRotateX", array(
    "name"        => "Horizontal rotation",
    "description" => "",
    "type"        => "slider",
    "min"         => -180,
    "max"         => 180,
    "default"     => 0,
    "mu"          => "deg",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Image loaded effects", "loadedHSlide", array(
    "name"        => "Horizontal slide",
    "description" => "",
    "type"        => "slider",
    "min"         => -1000,
    "max"         => 1000,
    "mu"          => "px",
    "default"     => 0,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Image loaded effects", "loadedVSlide", array(
    "name"        => "Vertical slide",
    "description" => "",
    "type"        => "slider",
    "min"         => -1000,
    "max"         => 1000,
    "mu"          => "px",
    "default"     => 0,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Style", "borderSize", array(
    "name"        => "Border size",
    "type"        => "number",
    "description" => "Size of the border of each image.",
    "default"     => 0,
    "min"         => 0,
    "max"         => 10,
    "mu"          => "px",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Style", "borderRadius", array(
    "name"        => "Border radius",
    "type"        => "number",
    "description" => "Border radius of the images.",
    "default"     => 0,
    "min"         => 0,
    "max"         => 100,
    "mu"          => "px",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Style", "borderColor", array(
    "name"        => "Border color",
    "type"        => "color",
    "description" => "Color of the border when size is greater than 0.",
    "default"     => "#000000",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Style", "loadingBarColor", array(
    "name"        => "Loading Bar color",
    "type"        => "color",
    "description" => "Color of the loading bar",
    "default"     => "#000000",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Style", "loadingBarBackgroundColor", array(
    "name"        => "Loading Bar background color",
    "type"        => "color",
    "description" => "Background color of the loading bar",
    "default"     => "#cccccc",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Style", "shadowSize", array(
    "name"        => "Shadow size",
    "type"        => "number",
    "description" => "Shadow size of the images.",
    "default"     => 0,
    "min"         => 0,
    "max"         => 20,
    "mu"          => "px",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Style", "shadowColor", array(
    "name"        => "Shadow color",
    "type"        => "color",
    "description" => "Color of the shadow when size is greater than 0.",
    "default"     => "#000000",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Style", "backgroundColor", array(
    "name"        => "Tile background color",
    "type"        => "color",
    "description" => "Background color of tiles",
    "default"     => "#fafafa",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Customizations", "aClass", array(
    "name"        => "Additional CSS class on A tag",
    "type"        => "text",
    "description" => "Use this field if you need to add additional CSS classes to the link that contains the image.",
    "default"     => "",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Customizations", "rel", array(
    "name"        => "Value of 'rel' attribute on the link that contains the image.",
    "type"        => "text",
    "description" => "Use this field if you need to add additional CSS classes to the link that contains the image. This is useful mostly to integrate the gallery with other lightbox plugins.",
    "default"     => "",
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Customizations", "beforeGalleryText", array(
    "name"        => "Text before gallery",
    "type"        => "textarea",
    "description" => "Use this field to add text/html to be placed just before your gallery.",
    "proCall"     => false,
    "excludeFrom" => array( "shortcode" ),
) );
$this->addField( "Customizations", "afterGalleryText", array(
    "name"        => "Text after gallery",
    "type"        => "textarea",
    "description" => "Use this field to add text/html to be placed just after your gallery.",
    "proCall"     => false,
    "excludeFrom" => array( "shortcode" ),
) );
$this->addField( "Customizations", "style", array(
    "name"        => "Custom CSS",
    "type"        => "textarea",
    "description" => "<strong>Write just the code without using the &lt;style&gt; tag.</strong><br>List of useful selectors:<br>\n        <br>\n        <ul>\n            <li>\n                <em>.final-tiles-gallery</em> : gallery container;\n            </li>\n            <li>\n                <em>.final-tiles-gallery .tile-inner</em> : tile content;\n            </li>\n            <li>\n                <em>.final-tiles-gallery .tile-inner .item</em> : image of the tile;\n            </li>\n            <li>\n                <em>.final-tiles-gallery .tile-inner .caption</em> : caption of the tile;\n            </li>\n            <li>\n                <em>.final-tiles-gallery .ftg-filters</em> : filters container\n            </li>\n            <li>\n                <em>.final-tiles-gallery .ftg-filters a</em> : filter\n            </li>\n            <li>\n                <em>.final-tiles-gallery .ftg-filters a.selected</em> : selected filter\n            </li>\n        </ul>",
    "proCall"     => false,
    "excludeFrom" => array( "shortcode" ),
) );
$this->addField( "Customizations", "script", array(
    "name"        => "Custom scripts",
    "type"        => "textarea",
    "description" => "This script will be called after the gallery initialization. Useful for custom lightboxes.\n            <br />\n            <br />\n            <strong>Write just the code without using the &lt;script&gt;&lt;/script&gt; tags</strong>",
    "proCall"     => false,
    "excludeFrom" => array( "shortcode" ),
) );
$this->addField( "Customizations", "delay", array(
    "name"        => "Delay",
    "type"        => "text",
    "description" => "Delay (in milliseconds) before firing the gallery. Sometimes it's needed to avoid conflicts with other plugins.",
    "min"         => 0,
    "max"         => 5000,
    "mu"          => "ms",
    "default"     => 0,
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Customizations", "support", array(
    "name"        => "Show developer link",
    "type"        => "toggle",
    "description" => "I want to support this plugin, show the developer link!",
    "default"     => "F",
    "proCall"     => false,
    "excludeFrom" => array(),
    "proCall"     => false,
    "excludeFrom" => array(),
) );
$this->addField( "Customizations", "supportText", array(
    "name"        => "Developer link text",
    "type"        => "text",
    "description" => "Text for the developer link",
    "default"     => "powered by Final Tiles Grid Gallery",
    "proCall"     => false,
    "excludeFrom" => array(),
) );