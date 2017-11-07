<?php

/* @galleries/view.twig */
class __TwigTemplate_0d05fa4ebfefdc1441eade3b7aa70c7ca060b7fc65f97a9ceb7968ab8e9d4bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/view.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'settingsCaptionsView' => array($this, 'block_settingsCaptionsView'),
            'settingsCaptionsIconsEnabledView' => array($this, 'block_settingsCaptionsIconsEnabledView'),
            'settingsCaptionsIconsDisabledView' => array($this, 'block_settingsCaptionsIconsDisabledView'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "title", array()), "html", null, true);
        echo "</a>
    </nav>

    <section class=\"supsystic-bar sgg-all-img-info-sect\" id=\"single-gallery-toolbar\">
        <ul class=\"supsystic-bar-controls\">
            <li title=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                <button class=\"button button-primary gallery import-to-gallery\">
                    <i class=\"fa fa-fw fa-upload\"></i>
                    ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                </button>
            </li>
            <li>
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\">
                    <i class=\"fa fa-fw fa-cogs\"></i>
                    ";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
        echo "
                </a>
            </li>

            <li>
                <a target=\"_blank\"
                   href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\" data-button=\"preview\">
                    <i class=\"fa fa-fw fa-eye\"></i>
                    ";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                </a>
            </li>
\t\t\t<li class=\"separator\">|</li>
        </ul>

\t\t<ul class=\"supsystic-bar-controls\">
\t\t\t<li>
\t\t\t\t<button class=\"button\" data-button=\"remove\" disabled>
\t\t\t\t\t<i class=\"fa fa-fw fa-trash-o\"></i>
\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete Image")), "html", null, true);
        echo "
\t\t\t\t</button>
\t\t\t</li>
\t\t\t<li class=\"separator\">|</li>
\t\t</ul>

\t\t<ul class=\"supsystic-bar-controls\">
\t\t\t<li>
\t\t\t\t<input id=\"find-by-caption\" type=\"text\" style=\"height:34px; width: 200px;\" placeholder=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "\">
\t\t\t</li>
\t\t\t<li class=\"separator\">|</li>
\t\t</ul>

        <ul class=\"supsystic-bar-controls\">
            <li title=\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "
                <select name=\"sortby\" style=\"height: 34px;\">
                    <option value=\"postion\" ";
        // line 60
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "position")) {
            echo "selected";
        }
        echo ">Position</option>
                    <option value=\"adate\" ";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "adate")) {
            echo "selected";
        }
        echo ">Add date</option>
                    <option value=\"date\" ";
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "date")) {
            echo "selected";
        }
        echo ">Create date</option>
                    <option value=\"size\" ";
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "size")) {
            echo "selected";
        }
        echo ">Size</option>
                    <option value=\"name\" ";
        // line 64
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "name")) {
            echo "selected";
        }
        echo ">Name</option>
                    <option value=\"filename\" ";
        // line 65
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "filename")) {
            echo "selected";
        }
        echo ">File name</option>
\t\t\t\t\t";
        // line 66
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
            echo "<option value=\"tags\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "tags")) {
                echo "selected";
            }
            echo ">Tags</option>";
        }
        // line 67
        echo "                    <option value=\"randomly\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "randomly")) {
            echo "selected";
        }
        echo ">Randomly</option>
                </select>
            </li>

\t\t\t<li id=\"sortToLi\" title=\"";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "\" style=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortby", array()) == "randomly")) {
            echo " display:none; ";
        }
        echo " }}\">
\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "
\t\t\t\t<select name=\"sortto\" style=\"height: 34px;\">
\t\t\t\t\t<option value=\"asc\" ";
        // line 74
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortto", array()) == "asc")) {
            echo "selected";
        }
        echo ">Asc</option>
\t\t\t\t\t<option value=\"desc\" ";
        // line 75
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort", array()), "sortto", array()) == "desc")) {
            echo "selected";
        }
        echo ">Desc</option>
\t\t\t\t</select>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<button class=\"button button-primary\" data-button=\"sortbtn\">
\t\t\t\t\t<i class=\"fa fa-fw fa-check\"></i>
\t\t\t\t\tOk
\t\t\t\t</button>
\t\t\t</li>
        </ul>

        <ul class=\"supsystic-bar-controls\">
\t\t\t";
        // line 88
        if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
            // line 89
            echo "                <li>
                    <select name=\"bulkactions\" style=\"height: 34px;\">
\t\t\t\t\t\t";
            // line 91
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array())) > 0)) {
                // line 92
                echo "                            <option value=\"add\">Add Selected Images to</option>
\t\t\t\t\t\t";
            }
            // line 94
            echo "                        <option value=\"newcat\">Create New Category</option>
\t\t\t\t\t\t";
            // line 95
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array())) > 0)) {
                // line 96
                echo "                            <option value=\"delcat\">Delete Category</option>
                            <option value=\"rencat\">Rename Category</option>
\t\t\t\t\t\t";
            }
            // line 99
            echo "                    </select>
                </li>

                <li>
\t\t\t\t\t";
            // line 103
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array())) > 0)) {
                // line 104
                echo "                        <select name=\"catactions\" style=\"height: 34px;\">
\t\t\t\t\t\t\t";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array()));
                foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                    // line 106
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                            <option value=\"allcat\" style=\"display:none;\">All Categories</option>
                        </select>
\t\t\t\t\t";
            }
            // line 111
            echo "                    <input type=\"text\" name=\"newTag\" ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "tags", array())) != 0)) {
                echo " style=\"display:none; height:34px; width: 150px;\" ";
            } else {
                echo " style=\"width: 150px; height:34px;\" ";
            }
            echo "value=\"\" placeholder=\"Category name...\">
                </li>

                <li>
                    <button class=\"button button-primary\" data-button=\"allimagetags\">
                        <i class=\"fa fa-fw fa-check\"></i>
\t\t\t\t\t\t";
            // line 117
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "
                    </button>
                </li>

\t\t\t";
        }
        // line 122
        echo "        </ul>
    </section>

";
    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        // line 128
        echo "    ";
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/view.twig", 128);
        // line 129
        echo "
    ";
        // line 130
        if (( !array_key_exists("gallery", $context) || (null === (isset($context["gallery"]) ? $context["gallery"] : null)))) {
            // line 131
            echo "        <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("The gallery is does not exists")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 133
            echo "        ";
            if (twig_test_empty($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()))) {
                // line 134
                echo "            <h2 style=\"text-align: center; color: #bfbfbf; margin: 50px 0 25px 0;\">
                <span style=\"margin-bottom: 20px; display: block;\">
                    ";
                // line 136
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently this gallery has no images")), "html", null, true);
                echo "
                </span>
                ";
                // line 138
                echo $context["importTypes"]->getshow("1000", $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
                echo "
            </h2>
        ";
            } else {
                // line 141
                echo "            ";
                $context["view"] = $this->loadTemplate("@ui/type.twig", "@galleries/view.twig", 141);
                // line 142
                echo "            ";
                $context["entity"] = array("images" => $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "photos", array()));
                // line 143
                echo "            ";
                $context["sliderSettings"] = (isset($context["settings"]) ? $context["settings"] : null);
                // line 144
                echo "
            ";
                // line 145
                if (((isset($context["viewType"]) ? $context["viewType"] : null) == "block")) {
                    // line 146
                    echo "                ";
                    echo $context["view"]->getblock_view((isset($context["entity"]) ? $context["entity"] : null));
                    echo "
            ";
                }
                // line 148
                echo "
\t\t\t";
                // line 149
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "images", array())) > 0)) {
                    // line 150
                    echo "\t\t\t\t";
                    $context["pagination_view"] = $this->loadTemplate("@galleries/helpers/pagination_view.twig", "@galleries/view.twig", 150);
                    // line 151
                    echo "\t\t\t\t";
                    echo $context["pagination_view"]->getpaginationRender((isset($context["paginationSettings"]) ? $context["paginationSettings"] : null));
                    echo "
\t\t\t";
                }
                // line 153
                echo "
            ";
                // line 154
                if (((isset($context["viewType"]) ? $context["viewType"] : null) == "list")) {
                    // line 155
                    echo "                ";
                    echo $context["view"]->getlist_view((isset($context["entity"]) ? $context["entity"] : null), (isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
                    echo "
            ";
                }
                // line 157
                echo "        ";
            }
            // line 158
            echo "    ";
        }
        // line 159
        echo "
    <div id=\"importDialog\" title=\"";
        // line 160
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 161
        echo $context["importTypes"]->getshow(400, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id", array()));
        echo "
    </div>

    <div id=\"linkedImagesDialog\" title=\"";
        // line 164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked Images")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div class=\"linked-images-action-buttons\">
            <button class=\"button add\">";
        // line 166
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add images")), "html", null, true);
        echo "</button>
            <button class=\"button remove\">";
        // line 167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove selected")), "html", null, true);
        echo "</button>
        </div>
        <div class=\"linked-attachments-list\">
            
        </div>
        <div class=\"loading-container\">
            <i class=\"fa fa-spinner fa-spin fa-2x\"></i>
        </div>
    </div>

    <div id=\"effectDialog\" title=\"";
        // line 177
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
            ";
        // line 179
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Skwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 208
        echo "            ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 215
        echo "            ";
        ob_start();
        // line 216
        echo "                border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
                ";
        // line 217
        if ((($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "enabled", array()) == "true"))) {
            // line 218
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 219
                echo "                        background-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
                    ";
            }
            // line 221
            echo "                ";
        } else {
            // line 222
            echo "                    color:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
                    background-color:";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
                    font-size:";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
                    ";
            // line 225
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 226
                echo "                        text-align:";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
                    ";
            }
            // line 228
            echo "                    ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 229
                echo "                        ";
                // line 230
                echo "                        bottom:0;
                    ";
            }
            // line 232
            echo "                ";
        }
        // line 233
        echo "            ";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 234
        echo "
\t\t\t";
        // line 235
        $this->displayBlock('settingsCaptionsView', $context, $blocks);
        // line 327
        echo "        </div>
        <style>
            .hi-icon { 
                color: ";
        // line 330
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon:hover { 
                color: ";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon { 
                width: ";
        // line 338
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
                height: ";
        // line 339
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
            .hi-icon:before { 
                font-size: ";
        // line 342
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important; 
                line-height: ";
        // line 343
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
        </style>
    </div>
";
    }

    // line 235
    public function block_settingsCaptionsView($context, array $blocks = array())
    {
        // line 236
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "settings", array()), "icons", array()), "enabled", array()) == "false")) {
            // line 237
            echo "\t\t\t\t\t";
            $this->displayBlock('settingsCaptionsIconsEnabledView', $context, $blocks);
            // line 295
            echo "\t\t\t\t";
        } else {
            // line 296
            echo "\t\t\t\t\t";
            $this->displayBlock('settingsCaptionsIconsDisabledView', $context, $blocks);
            // line 325
            echo "\t\t\t\t";
        }
        // line 326
        echo "\t\t\t";
    }

    // line 237
    public function block_settingsCaptionsIconsEnabledView($context, array $blocks = array())
    {
        // line 238
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 239
            echo "\t\t\t\t\t\t\t";
            if (($context["type"] == "direction-aware")) {
                // line 240
                echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box__right\">Right ? Left</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box__left\">Left ? Right</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box__top\">Top ? Bottom</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box__bottom\">Bottom ? Top</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box__center\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 248
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t";
                // line 251
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t";
            } elseif ((            // line 254
$context["type"] == "3d-cube")) {
                // line 255
                echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-3d-cube\"
\t\t\t\t\t\t\t\t\t\t\t style=\"
\t\t\t\t\t\t\t\t\t\t\t\t transform-origin:50% 50% -75px;
\t\t\t\t\t\t\t\t\t\t\t\t -ms-transform-origin: 50% 50% -75px;
\t\t\t\t\t\t\t\t\t\t\t\t -webkit-transform-origin: 50% 50% -75px;
\t\t\t\t\t\t\t\t\t\t\t\t width:150px; height:150px
\t\t\t\t\t\t\t\t\t\t\t \"
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"face front\" style=\"width:150px; height:150px\">
\t\t\t\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 266
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"";
                // line 268
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 270
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t";
                // line 276
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t";
            } else {
                // line 280
                echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 281
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t<figcaption style=\"";
                // line 282
                echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 284
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t";
                // line 288
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t";
            }
            // line 292
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "\t\t\t\t\t\t<div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
\t\t\t\t\t";
    }

    // line 296
    public function block_settingsCaptionsIconsDisabledView($context, array $blocks = array())
    {
        // line 297
        echo "\t\t\t\t\t\t<div class=\"captions-effect-with-icons\" data-confirm=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3>Captions effects with icons</h3>
\t\t\t\t\t\t\t";
        // line 299
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 323
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 299
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 300
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["iconsWithCaptionsEffects"]) ? $context["iconsWithCaptionsEffects"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 301
            echo "\t\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 302
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
\t\t\t\t\t\t\t\t\t\t<figcaption style=\"";
            // line 303
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t<div class=\"caption-with-";
            // line 309
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\tvertical-align:";
            // line 312
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t\tCaption
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 318
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@galleries/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  764 => 322,  754 => 318,  745 => 312,  741 => 311,  736 => 309,  727 => 303,  723 => 302,  718 => 301,  713 => 300,  710 => 299,  705 => 323,  703 => 299,  697 => 297,  694 => 296,  689 => 293,  683 => 292,  676 => 288,  669 => 284,  664 => 282,  660 => 281,  655 => 280,  648 => 276,  639 => 270,  634 => 268,  629 => 266,  614 => 255,  612 => 254,  606 => 251,  600 => 248,  588 => 240,  585 => 239,  580 => 238,  577 => 237,  573 => 326,  570 => 325,  567 => 296,  564 => 295,  561 => 237,  558 => 236,  555 => 235,  546 => 343,  542 => 342,  536 => 339,  532 => 338,  526 => 335,  522 => 334,  516 => 331,  512 => 330,  507 => 327,  505 => 235,  502 => 234,  499 => 233,  496 => 232,  492 => 230,  490 => 229,  487 => 228,  481 => 226,  479 => 225,  474 => 224,  470 => 223,  465 => 222,  462 => 221,  456 => 219,  453 => 218,  451 => 217,  446 => 216,  443 => 215,  440 => 208,  438 => 179,  433 => 177,  420 => 167,  416 => 166,  411 => 164,  405 => 161,  401 => 160,  398 => 159,  395 => 158,  392 => 157,  386 => 155,  384 => 154,  381 => 153,  375 => 151,  372 => 150,  370 => 149,  367 => 148,  361 => 146,  359 => 145,  356 => 144,  353 => 143,  350 => 142,  347 => 141,  341 => 138,  336 => 136,  332 => 134,  329 => 133,  323 => 131,  321 => 130,  318 => 129,  315 => 128,  312 => 127,  305 => 122,  297 => 117,  283 => 111,  278 => 108,  267 => 106,  263 => 105,  260 => 104,  258 => 103,  252 => 99,  247 => 96,  245 => 95,  242 => 94,  238 => 92,  236 => 91,  232 => 89,  230 => 88,  212 => 75,  206 => 74,  201 => 72,  193 => 71,  183 => 67,  175 => 66,  169 => 65,  163 => 64,  157 => 63,  151 => 62,  145 => 61,  139 => 60,  134 => 58,  130 => 57,  121 => 51,  110 => 43,  97 => 33,  91 => 30,  82 => 24,  76 => 21,  69 => 17,  63 => 14,  53 => 9,  46 => 7,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/view.twig", "C:\\wamp64\\www\\verissimofotografia.com.br\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\view.twig");
    }
}
