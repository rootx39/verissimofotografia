<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_eb5f02327043619a5f49d08a67fd5f559b17064d4f15e778fcefdd35fdc7fe33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ggFigureWidth' => array($this, 'block_ggFigureWidth'),
            'ggMosaicHiddenItem' => array($this, 'block_ggMosaicHiddenItem'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'a_attributes_class_set' => array($this, 'block_a_attributes_class_set'),
            'a_attributes_href' => array($this, 'block_a_attributes_href'),
            'figure_before' => array($this, 'block_figure_before'),
            'galleryTypeBlock' => array($this, 'block_galleryTypeBlock'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'previewImageUrlVar' => array($this, 'block_previewImageUrlVar'),
            'imageAttributesStyleSize' => array($this, 'block_imageAttributesStyleSize'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figure_after' => array($this, 'block_figure_after'),
            'oneGalleryImage' => array($this, 'block_oneGalleryImage'),
            'mosaicLastImageNumberWrapper' => array($this, 'block_mosaicLastImageNumberWrapper'),
            'mosaicFigcaptionWrapper' => array($this, 'block_mosaicFigcaptionWrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "type", array()) != "none")) {
            // line 3
            echo "\t\tborder: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "width", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";
\tmargin: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "distance", array()), "html", null, true);
        echo "px;";
        // line 11
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) {
            // line 12
            echo "\t\theight:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 14
        echo "\t";
        $this->displayBlock('ggFigureWidth', $context, $blocks);
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
";
        // line 23
        ob_start();
        // line 24
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array())))) {
            // line 25
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 27
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
";
        // line 31
        ob_start();
        // line 32
        echo "\t";
        if (((( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())))) && ( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "0"))) {
            // line 33
            echo "\t\tgg-colorbox
\t";
        }
        // line 35
        echo "
\t";
        // line 36
        if ((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "0"))) {
            // line 37
            echo "\t\tgg-video
\t";
        }
        // line 39
        echo "
\t";
        // line 40
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") && (( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())))) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))))))) {
            // line 41
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "
";
        // line 45
        ob_start();
        // line 46
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())))) {
            // line 47
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()))), "html", null, true);
            echo "
\t\t";
            // line 48
            $context["link"] = true;
            // line 49
            echo "\t";
        } else {
            // line 50
            echo "\t\t";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array())), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
";
        // line 54
        ob_start();
        // line 55
        echo "\t";
        if (((isset($context["link"]) ? $context["link"] : null) && $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 56
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "rel", array()), "html", null, true);
            echo "
\t";
        }
        // line 58
        echo "\t";
        if ((((isset($context["link"]) ? $context["link"] : null) == false) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "enabled", array()) == "false"))) {
            // line 59
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
";
        // line 63
        ob_start();
        // line 64
        echo "
\t";
        // line 65
        ob_start();
        // line 66
        echo "\t\t";
        $this->displayBlock('ggMosaicHiddenItem', $context, $blocks);
        // line 68
        echo "\t";
        $context["ggMosaicHiddenItemVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 69
        echo "
\t";
        // line 70
        ob_start();
        // line 71
        echo "\t\t";
        $this->displayBlock('a_attributes', $context, $blocks);
        // line 92
        echo "\t";
        $context["var_a_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 93
        echo "
\t";
        // line 94
        ob_start();
        // line 95
        echo "\t\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 100
        echo "\t";
        $context["var_figure_before"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 101
        echo "
\t";
        // line 102
        ob_start();
        // line 103
        echo "\t\t";
        $this->displayBlock('galleryTypeBlock', $context, $blocks);
        // line 126
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 127
        echo "
\t";
        // line 128
        ob_start();
        // line 129
        echo "\t\t";
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 151
        echo "\t";
        $context["var_figure_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 152
        echo "
\t";
        // line 153
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 154
        echo "
\t";
        // line 155
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0)) {
            // line 156
            echo "\t\t";
            $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array());
            // line 157
            echo "\t";
        } else {
            // line 158
            echo "\t\t";
            // line 159
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width_unit", array()) == 0)) {
                // line 160
                echo "\t\t\t";
                $context["width"] = round((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "width", array()) / 100) * $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array())));
                // line 161
                echo "\t\t";
            } else {
                // line 162
                echo "\t\t\t";
                $context["width"] = null;
                // line 163
                echo "\t\t";
            }
            // line 164
            echo "\t";
        }
        // line 165
        echo "
\t";
        // line 166
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0)) {
            // line 167
            echo "\t\t";
            $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array());
            // line 168
            echo "\t";
        } else {
            // line 169
            echo "\t\t";
            // line 170
            echo "\t\t";
            $context["height"] = null;
            // line 171
            echo "\t\t";
            // line 172
            echo "\t\t";
            // line 173
            echo "\t\t";
            // line 174
            echo "\t\t";
            // line 175
            echo "\t\t";
            // line 176
            echo "\t";
        }
        // line 177
        echo "
\t";
        // line 178
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 3))) {
            // line 179
            echo "\t\t";
            $context["crop"] = 1;
            // line 180
            echo "\t";
        }
        // line 181
        echo "
\t";
        // line 182
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 1)) {
            // line 183
            echo "\t\t";
            $context["height"] = null;
            // line 184
            echo "\t";
        }
        // line 185
        echo "
\t";
        // line 186
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 2)) {
            // line 187
            echo "\t\t";
            $context["width"] = null;
            // line 188
            echo "\t";
        }
        // line 189
        echo "
\t";
        // line 190
        ob_start();
        // line 191
        echo "\t\t";
        $this->displayBlock('previewImageUrlVar', $context, $blocks);
        // line 198
        echo "\t";
        $context["previewImgUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 199
        echo "
\t";
        // line 200
        ob_start();
        // line 201
        echo "\t\t";
        $this->displayBlock('imageAttributesStyleSize', $context, $blocks);
        // line 209
        echo "\t";
        $context["imageAttributesStyleSizeVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 210
        echo "
\t";
        // line 211
        ob_start();
        // line 212
        echo "\t\t";
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 221
        echo "\t";
        $context["var_image_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 222
        echo "
\t";
        // line 223
        ob_start();
        // line 224
        echo "\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 247
        echo "\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 248
        echo "
\t";
        // line 249
        ob_start();
        // line 250
        echo "\t\t";
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 257
        echo "\t";
        $context["var_figcaption_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 258
        echo "
\t";
        // line 259
        $context["prepareImgUrl"] = (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
        // line 260
        echo "
\t";
        // line 261
        ob_start();
        // line 262
        echo "\t\t";
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 336
        echo "\t";
        $context["var_figcaption_wrap"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 337
        echo "
\t";
        // line 338
        ob_start();
        // line 339
        echo "\t\t";
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 379
        echo "\t";
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 380
        echo "
\t";
        // line 381
        ob_start();
        // line 382
        echo "\t\t";
        $this->displayBlock('figure_after', $context, $blocks);
        // line 387
        echo "\t";
        $context["var_figure_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 388
        echo "
\t";
        // line 389
        $this->displayBlock('oneGalleryImage', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 14
    public function block_ggFigureWidth($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "2")) {
            // line 16
            echo "\t\t\twidth:auto;
\t\t";
        } else {
            // line 18
            echo "\t\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t";
        }
        // line 20
        echo "\t";
    }

    // line 66
    public function block_ggMosaicHiddenItem($context, array $blocks = array())
    {
        // line 67
        echo "\t\t";
    }

    // line 71
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 72
        echo "\t\t\tid=\"gg-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
        echo "\"
\t\t\t";
        // line 73
        $this->displayBlock('a_attributes_class_set', $context, $blocks);
        // line 76
        echo "\t\t\t";
        echo twig_escape_filter($this->env, (isset($context["ggMosaicHiddenItemVar"]) ? $context["ggMosaicHiddenItemVar"] : null), "html", null, true);
        echo "
\t\t\t";
        // line 77
        $this->displayBlock('a_attributes_href', $context, $blocks);
        // line 81
        echo "\t\t\ttitle=\"";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
        echo "\"
\t\t\t";
        // line 82
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
            // line 83
            echo "\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 84
(isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()) == null)) {
            // line 85
            echo "\t\t\t\trel=\"";
            echo twig_escape_filter($this->env, (isset($context["aRel"]) ? $context["aRel"] : null), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 87
        echo "\t\t\t";
        if (((isset($context["link"]) ? $context["link"] : null) == true)) {
            // line 88
            echo "\t\t\t\tdata-type=\"link\"
\t\t\t";
        }
        // line 90
        echo "\t\t\tstyle=\"border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t";
    }

    // line 73
    public function block_a_attributes_class_set($context, array $blocks = array())
    {
        // line 74
        echo "\t\t\t\tclass=\"gg-link ";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aClass"]) ? $context["aClass"] : null)), "html", null, true);
        echo " ";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t";
    }

    // line 77
    public function block_a_attributes_href($context, array $blocks = array())
    {
        // line 78
        echo "\t\t\t\thref=\"";
        echo twig_escape_filter($this->env, htmlspecialchars_decode(twig_trim_filter((isset($context["aHref"]) ? $context["aHref"] : null))), "html", null, true);
        echo "\"
\t\t\t\ttarget=\"";
        // line 79
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t";
    }

    // line 95
    public function block_figure_before($context, array $blocks = array())
    {
        // line 96
        echo "\t\t\t";
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 97
            echo "\t\t\t\t<a ";
            echo twig_escape_filter($this->env, (isset($context["var_a_attributes"]) ? $context["var_a_attributes"] : null), "html", null, true);
            echo " >
\t\t\t";
        }
        // line 99
        echo "\t\t";
    }

    // line 103
    public function block_galleryTypeBlock($context, array $blocks = array())
    {
        // line 104
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false")) {
            // line 105
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
                // line 106
                echo "\t\t\t\t\ticons
\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\tnone
\t\t\t\t";
            }
            // line 110
            echo "\t\t\t";
        } else {
            // line 111
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
                // line 112
                echo "\t\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true") && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "captionEffect", array()), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 113
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "captionEffect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t";
            } else {
                // line 118
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
                    // line 119
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 121
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 123
                echo "\t\t\t\t";
            }
            // line 124
            echo "\t\t\t";
        }
        // line 125
        echo "\t\t";
    }

    // line 129
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 130
        echo "\t\t\tclass=\"grid-gallery-caption
\t\t\t";
        // line 131
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto", array()) == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        // line 132
        echo "\t\t\t";
        echo twig_escape_filter($this->env, (isset($context["ggMosaicHiddenItemVar"]) ? $context["ggMosaicHiddenItemVar"] : null), "html", null, true);
        echo "
\t\t\t";
        // line 133
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 134
            echo "\t\t\t\tshadow-show
\t\t\t";
        }
        // line 136
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow", array()) == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 137
            echo "\t\t\t\tshadow-hide
\t\t\t";
        }
        // line 138
        echo "\"
\t\t\tdata-grid-gallery-type=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["galleryType"]) ? $context["galleryType"] : null)), "html", null, true);
        echo "\"
\t\t\tstyle=\"display:none;";
        // line 140
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figureStyle"]) ? $context["figureStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 141
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true")) {
            // line 142
            echo "\t\t\t\t\t";
            ob_start();
            // line 143
            echo "\t\t\t\t\t\t";
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                // line 144
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 146
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 149
            echo "\t\t\t\t";
        }
        // line 150
        echo "\t\t";
    }

    // line 191
    public function block_previewImageUrlVar($context, array $blocks = array())
    {
        // line 192
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "isNotRealAttachment", array()) == 1)) {
            // line 193
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "url", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 195
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "id", array()), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "cropPosition", array()), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100")))), "html", null, true);
            echo "
\t\t\t";
        }
        // line 197
        echo "\t\t";
    }

    // line 201
    public function block_imageAttributesStyleSize($context, array $blocks = array())
    {
        // line 202
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array())))) {
            // line 203
            echo "\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 205
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array())))) {
            // line 206
            echo "\t\t\t\theight:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 208
        echo "\t\t";
    }

    // line 212
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 213
        echo "\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, (isset($context["previewImgUrl"]) ? $context["previewImgUrl"] : null), "html", null, true);
        echo "\"
\t\t\talt=\"";
        // line 214
        if ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array())) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array()) == " "))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "alt", array()), "html", null, true);
        }
        echo "\"
\t\t\ttitle=\"";
        // line 215
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-description=\"";
        // line 216
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-caption=\"";
        // line 217
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()));
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()));
        }
        echo "\"
\t\t\tdata-title=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["imageAttributesStyleSizeVar"]) ? $context["imageAttributesStyleSizeVar"] : null), "html", null, true);
        echo "\"
\t\t";
    }

    // line 224
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 225
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 226
            echo "\t\t\t\tfont-family:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 227
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 228
                echo "\t\t\t\t\tbackground-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\theight : 100%;
\t\t\t\t\t";
                // line 231
                echo "\t\t\t\t";
            } else {
                // line 232
                echo "\t\t\t\t\theight : 100%;
\t\t\t\t\tbackground-color: transparent;
\t\t\t\t";
            }
            // line 235
            echo "\t\t\t";
        } else {
            // line 236
            echo "\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\tbackground-color:";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\tfont-size:";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\ttext-align:";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), "html", null, true);
            echo ";
\t\t\t\tfont-family:";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 241
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 242
                echo "\t\t\t\t\topacity:1;
\t\t\t\t\tbottom:0;
\t\t\t\t";
            }
            // line 245
            echo "\t\t\t";
        }
        // line 246
        echo "\t\t";
    }

    // line 250
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 251
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 252
            echo "\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array()), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 254
        echo "\t\t\tdata-alpha=\"";
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 255
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
        echo "\"
\t\t";
    }

    // line 262
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 263
        echo "\t\t\t";
        // line 264
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 265
            echo "\t\t\t\t<div
\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 266
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "effect", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\tdata-margin=\"";
            // line 267
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t>
\t\t\t\t\t";
            // line 269
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())))) {
                // line 270
                echo "
\t\t\t\t\t\t";
                // line 271
                ob_start();
                // line 272
                echo "\t\t\t\t\t\t\t";
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()), (isset($context["youtube"]) ? $context["youtube"] : null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 274
                    $context["videoSource"] = "youtube";
                    // line 275
                    echo "\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) {
                    // line 276
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()), (isset($context["vimeoPattern"]) ? $context["vimeoPattern"] : null), (isset($context["vimeoReplace"]) ? $context["vimeoReplace"] : null))) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 277
                    $context["videoSource"] = "vimeo";
                    // line 278
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 279
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 281
                echo "\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 282
                echo "
\t\t\t\t\t\t";
                // line 283
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "video", array()))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 284
                echo "
\t\t\t\t\t\t";
                // line 285
                ob_start();
                // line 286
                echo "\t\t\t\t\t\t\tmargin-left:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\tmargin-right:";
                // line 287
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 289
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 290
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["videoUrl"]) ? $context["videoUrl"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t   data-id=\"gg-";
                // line 291
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t   title=\"";
                // line 292
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t   class=\"hi-icon gg-video ";
                // line 293
                echo twig_escape_filter($this->env, (isset($context["videoIcon"]) ? $context["videoIcon"] : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 294
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2")) {
                    echo " pbox";
                }
                // line 295
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t   style=\"";
                // line 296
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t   data-video-source=\"";
                // line 297
                echo twig_escape_filter($this->env, (isset($context["videoSource"]) ? $context["videoSource"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 299
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1")) {
                    // line 300
                    echo "\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                } else {
                    // line 302
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 303
                    echo "\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t";
                    // line 305
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 306
                echo "\t\t\t\t\t\t>
\t\t\t\t\t\t\t";
                // line 308
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 310
            echo "
\t\t\t\t\t";
            // line 311
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array())))) {
                // line 312
                echo "\t\t\t\t\t\t<a title=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                echo "\" data-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\" href=\"";
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "openByLink", array()) == "on")) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["prepareImgUrl"]) ? $context["prepareImgUrl"] : null), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()), "html", null, true);
                    echo " ";
                }
                echo " \" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link ";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "openByLink", array()) == "on"))) {
                    echo "pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t";
            }
            // line 314
            echo "
\t\t\t\t\t";
            // line 315
            if (( !array_key_exists("videoUrl", $context) && ( !$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "external_link", array()))))) {
                // line 316
                echo "\t\t\t\t\t\t<a title=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
                echo "\" data-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["prepareImgUrl"]) ? $context["prepareImgUrl"] : null), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "2") &&  !array_key_exists("link", $context))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 317
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box", array()), "type", array()) == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
                    // line 318
                    echo "\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                }
                // line 319
                echo ">Open in pop-up window</a>
\t\t\t\t\t";
            }
            // line 321
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 323
        echo "
\t\t\t";
        // line 324
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 325
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true")) {
                // line 326
                echo "\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
                    // line 327
                    echo "\t\t\t\t\t\t<div class=\"gg-image-caption fitvidsignore\" style=\"font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t<object type=\"none/none\">
\t\t\t\t\t\t\t\t";
                    // line 329
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 333
                echo "\t\t\t\t";
            }
            // line 334
            echo "\t\t\t";
        }
        // line 335
        echo "\t\t";
    }

    // line 339
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 340
        echo "\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true"))) {
            // line 341
            echo "
\t\t\t\t";
            // line 342
            ob_start();
            // line 343
            echo "\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\tbackground-color:";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\tfont-size:";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\tfont-family:";
            // line 346
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
            // line 347
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 348
                echo "\t\t\t\t\t\ttext-align:";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t";
            }
            // line 350
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 351
                echo "\t\t\t\t\t\topacity:1;
\t\t\t\t\t\tbottom:0;
\t\t\t\t\t";
            }
            // line 354
            echo "\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 356
            echo "
\t\t\t\t";
            // line 357
            if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array())) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "tooltip", array()) == "false"))) {
                // line 358
                echo "\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"caption-with-";
                // line 359
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\t\tstyle=\"";
                // line 360
                echo twig_escape_filter($this->env, (isset($context["captionStyle"]) ? $context["captionStyle"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-alpha=\"";
                // line 361
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 363
                if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array()))) {
                    // line 364
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo "; font-weight: 800;
\t\t\t\t\t\t\t\t\t\tvertical-align:";
                    // line 365
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 366
                    echo $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "caption", array());
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 369
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tvertical-align:";
                    // line 370
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 371
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array()), "title", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 374
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 377
            echo "\t\t\t";
        }
        // line 378
        echo "\t\t";
    }

    // line 382
    public function block_figure_after($context, array $blocks = array())
    {
        // line 383
        echo "\t\t\t";
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 384
            echo "\t\t\t\t</a>
\t\t\t";
        }
        // line 386
        echo "\t\t";
    }

    // line 389
    public function block_oneGalleryImage($context, array $blocks = array())
    {
        // line 390
        echo "\t\t";
        echo twig_escape_filter($this->env, (isset($context["var_figure_before"]) ? $context["var_figure_before"] : null), "html", null, true);
        echo "
\t\t<FIGURE ";
        // line 391
        echo twig_escape_filter($this->env, (isset($context["var_figure_attributes"]) ? $context["var_figure_attributes"] : null), "html", null, true);
        echo " >
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 393
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "shadow", array()), "overlay", array()) == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow", array()) == "1"))) {
            // line 394
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 395
        echo "\"
\t\t\t\t style=\"
\t\t\t\t ";
        // line 397
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "0") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == "3"))) {
            // line 398
            echo "\t\t\t\t\t\t width:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t height:";
            // line 399
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t overflow:hidden;
\t\t\t\t ";
        }
        // line 401
        echo "\">

\t\t\t\t<img ";
        // line 403
        echo twig_escape_filter($this->env, (isset($context["var_image_attributes"]) ? $context["var_image_attributes"] : null), "html", null, true);
        echo " />
\t\t\t</div>
\t\t\t";
        // line 405
        $this->displayBlock('mosaicLastImageNumberWrapper', $context, $blocks);
        // line 407
        echo "\t\t\t";
        $this->displayBlock('mosaicFigcaptionWrapper', $context, $blocks);
        // line 420
        echo "\t\t</FIGURE>
\t\t";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["var_figure_after"]) ? $context["var_figure_after"] : null), "html", null, true);
        echo "
\t";
    }

    // line 405
    public function block_mosaicLastImageNumberWrapper($context, array $blocks = array())
    {
        // line 406
        echo "\t\t\t";
    }

    // line 407
    public function block_mosaicFigcaptionWrapper($context, array $blocks = array())
    {
        // line 408
        echo "\t\t\t\t<FIGCAPTION ";
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_attributes"]) ? $context["var_figcaption_attributes"] : null), "html", null, true);
        echo "\t>
\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t";
        // line 412
        if (( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "false"))) {
            // line 413
            echo "\t\t\t\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t\t";
        }
        // line 414
        echo "\">
\t\t\t\t\t\t";
        // line 415
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_wrap"]) ? $context["var_figcaption_wrap"] : null), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</FIGCAPTION>
\t\t\t\t";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["var_figcaption_after"]) ? $context["var_figcaption_after"] : null), "html", null, true);
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1363 => 418,  1357 => 415,  1354 => 414,  1348 => 413,  1346 => 412,  1338 => 408,  1335 => 407,  1331 => 406,  1328 => 405,  1322 => 421,  1319 => 420,  1316 => 407,  1314 => 405,  1309 => 403,  1305 => 401,  1299 => 399,  1294 => 398,  1292 => 397,  1288 => 395,  1284 => 394,  1282 => 393,  1277 => 391,  1272 => 390,  1269 => 389,  1265 => 386,  1261 => 384,  1258 => 383,  1255 => 382,  1251 => 378,  1248 => 377,  1243 => 374,  1237 => 371,  1233 => 370,  1227 => 369,  1221 => 366,  1217 => 365,  1211 => 364,  1209 => 363,  1204 => 361,  1200 => 360,  1192 => 359,  1189 => 358,  1187 => 357,  1184 => 356,  1178 => 354,  1173 => 351,  1170 => 350,  1164 => 348,  1162 => 347,  1158 => 346,  1153 => 345,  1149 => 344,  1144 => 343,  1142 => 342,  1139 => 341,  1136 => 340,  1133 => 339,  1129 => 335,  1126 => 334,  1123 => 333,  1116 => 329,  1109 => 327,  1106 => 326,  1103 => 325,  1101 => 324,  1098 => 323,  1094 => 321,  1090 => 319,  1086 => 318,  1084 => 317,  1067 => 316,  1065 => 315,  1062 => 314,  1034 => 312,  1032 => 311,  1029 => 310,  1025 => 308,  1022 => 306,  1019 => 305,  1016 => 303,  1014 => 302,  1010 => 300,  1007 => 299,  1003 => 297,  999 => 296,  996 => 295,  992 => 294,  988 => 293,  984 => 292,  978 => 291,  974 => 290,  971 => 289,  966 => 287,  961 => 286,  959 => 285,  956 => 284,  954 => 283,  951 => 282,  948 => 281,  942 => 279,  939 => 278,  937 => 277,  932 => 276,  929 => 275,  927 => 274,  922 => 273,  919 => 272,  917 => 271,  914 => 270,  912 => 269,  907 => 267,  901 => 266,  898 => 265,  895 => 264,  893 => 263,  890 => 262,  884 => 255,  879 => 254,  873 => 252,  870 => 251,  867 => 250,  863 => 246,  860 => 245,  855 => 242,  853 => 241,  849 => 240,  845 => 239,  840 => 238,  836 => 237,  831 => 236,  828 => 235,  823 => 232,  820 => 231,  814 => 228,  812 => 227,  807 => 226,  804 => 225,  801 => 224,  795 => 219,  791 => 218,  783 => 217,  775 => 216,  767 => 215,  759 => 214,  754 => 213,  751 => 212,  747 => 208,  741 => 206,  738 => 205,  732 => 203,  729 => 202,  726 => 201,  722 => 197,  716 => 195,  710 => 193,  707 => 192,  704 => 191,  700 => 150,  697 => 149,  694 => 148,  690 => 146,  684 => 144,  681 => 143,  678 => 142,  676 => 141,  672 => 140,  668 => 139,  665 => 138,  661 => 137,  658 => 136,  654 => 134,  652 => 133,  647 => 132,  643 => 131,  640 => 130,  637 => 129,  633 => 125,  630 => 124,  627 => 123,  621 => 121,  615 => 119,  612 => 118,  609 => 117,  603 => 115,  597 => 113,  594 => 112,  591 => 111,  588 => 110,  584 => 108,  580 => 106,  577 => 105,  574 => 104,  571 => 103,  567 => 99,  561 => 97,  558 => 96,  555 => 95,  549 => 79,  544 => 78,  541 => 77,  530 => 74,  527 => 73,  520 => 90,  516 => 88,  513 => 87,  507 => 85,  505 => 84,  502 => 83,  500 => 82,  495 => 81,  493 => 77,  488 => 76,  486 => 73,  479 => 72,  476 => 71,  472 => 67,  469 => 66,  465 => 20,  459 => 18,  455 => 16,  452 => 15,  449 => 14,  444 => 389,  441 => 388,  438 => 387,  435 => 382,  433 => 381,  430 => 380,  427 => 379,  424 => 339,  422 => 338,  419 => 337,  416 => 336,  413 => 262,  411 => 261,  408 => 260,  406 => 259,  403 => 258,  400 => 257,  397 => 250,  395 => 249,  392 => 248,  389 => 247,  386 => 224,  384 => 223,  381 => 222,  378 => 221,  375 => 212,  373 => 211,  370 => 210,  367 => 209,  364 => 201,  362 => 200,  359 => 199,  356 => 198,  353 => 191,  351 => 190,  348 => 189,  345 => 188,  342 => 187,  340 => 186,  337 => 185,  334 => 184,  331 => 183,  329 => 182,  326 => 181,  323 => 180,  320 => 179,  318 => 178,  315 => 177,  312 => 176,  310 => 175,  308 => 174,  306 => 173,  304 => 172,  302 => 171,  299 => 170,  297 => 169,  294 => 168,  291 => 167,  289 => 166,  286 => 165,  283 => 164,  280 => 163,  277 => 162,  274 => 161,  271 => 160,  268 => 159,  266 => 158,  263 => 157,  260 => 156,  258 => 155,  255 => 154,  253 => 153,  250 => 152,  247 => 151,  244 => 129,  242 => 128,  239 => 127,  236 => 126,  233 => 103,  231 => 102,  228 => 101,  225 => 100,  222 => 95,  220 => 94,  217 => 93,  214 => 92,  211 => 71,  209 => 70,  206 => 69,  203 => 68,  200 => 66,  198 => 65,  195 => 64,  193 => 63,  190 => 62,  185 => 59,  182 => 58,  176 => 56,  173 => 55,  171 => 54,  168 => 53,  161 => 50,  158 => 49,  156 => 48,  151 => 47,  148 => 46,  146 => 45,  143 => 44,  138 => 41,  136 => 40,  133 => 39,  129 => 37,  127 => 36,  124 => 35,  120 => 33,  117 => 32,  115 => 31,  112 => 30,  105 => 27,  99 => 25,  96 => 24,  94 => 23,  91 => 22,  87 => 14,  81 => 12,  78 => 11,  75 => 9,  72 => 8,  60 => 7,  58 => 6,  53 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/helpers.twig", "C:\\wamp64\\www\\verissimofotografia.com.br\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\helpers.twig");
    }
}
