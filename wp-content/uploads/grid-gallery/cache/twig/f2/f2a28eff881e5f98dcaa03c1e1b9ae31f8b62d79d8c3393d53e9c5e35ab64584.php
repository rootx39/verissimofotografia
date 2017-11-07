<?php

/* @ui/type.twig */
class __TwigTemplate_c3b168b210facc8aac314f5d7f1699c83aafdece5e882e821ef6a63f4792cbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 39
        echo "
";
        // line 52
        echo "
";
        // line 82
        echo "
";
        // line 115
        echo "
";
        // line 158
        echo "
";
    }

    // line 1
    public function getlist_view($__entities__ = null, $__sliderSettings__ = null, $__galleryId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "sliderSettings" => $__sliderSettings__,
            "galleryId" => $__galleryId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["view"] = $this;
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "    <tr class=\"ui-jqgrid-labels-custom\" role=\"rowheader\">
        <th scope=\"col\" id=\"check-all\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            <input type=\"checkbox\" id=\"checkAll\" class=\"gg-checkbox\">
        </th>
        <th scope=\"col\" id=\"icon\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" id=\"title\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 12
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" id=\"date\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Date")), "html", null, true);
            echo "
        </th>
    </tr>
    ";
            $context["head"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "
    <table id=\"ui-jqgrid-htable-img\" class=\"ui-jqgrid-htable\" style=\"margin: 7px 0 7px -5px; width: 100%;\">
        <thead class=\"jqgrid-head-nav\">
        ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
            echo "
        </thead>
        <tfoot>
        ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
            echo "
        </tfoot>
        <tbody id=\"the-list\" data-sortable data-container=\"list\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 29
                echo "            ";
                echo $context["view"]->getlist_folder($context["folder"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "images", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 32
                echo "            ";
                echo $context["view"]->getlist_image($context["image"], (isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), (isset($context["galleryId"]) ? $context["galleryId"] : null));
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 34
                echo "            ";
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </tbody>
    </table>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getblock_view($__entities__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            $context["view"] = $this;
            // line 42
            echo "    <ul class=\"sg-photos\" data-sortable data-container=\"block\">
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 44
                echo "            ";
                echo $context["view"]->getblock_folder($context["folder"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 48
                echo "            ";
                echo $context["view"]->getblock_image($context["image"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 53
    public function getblock_folder($__folder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $__folder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    <li data-droppable class=\"gg-list-item\" data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id", array()), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["folder"]) ? $context["folder"] : null)));
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 0;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id", array()), "view" => "block")), "method"), "html", null, true);
            echo "\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     alt=\"\" width=\"150\" height=\"150\"/>

                <div style=\"position: absolute; top: 55px; left: 55px; color: #bdc3c7;\">
                    <i class=\"fa fa-folder-open-o\" style=\"font-size: 5em;\"></i>
                </div>

                <div class=\"gg-folder-photos\">
                    <i class=\"fa fa-picture-o\"></i> <span class=\"gg-folder-photos-num\">";
            // line 69
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "photos", array())), "html", null, true);
            echo "</span>
                </div>
            </a>

            <p>
                <span class=\"folder-title\">";
            // line 74
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "title", array())), "html", null, true);
            echo "</span>
                <small>
                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "date", array()), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function getblock_image($__image__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 84
            echo "    <li class=\"gg-list-item\" data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" data-entity-type=\"photo\"
        data-entity-info=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["image"]) ? $context["image"] : null)));
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 10;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a data-colorbox href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "sizes", array()), "full", array()), "url", array()), "html", null, true);
            echo "\">
                ";
            // line 91
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "sizes", array()), "thumbnail", array()))) {
                // line 92
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "sizes", array()), "full", array()), "url", array());
                // line 93
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "orientation", array()) == "landscape")) {
                    // line 94
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 95
                    echo "                    ";
                } else {
                    // line 96
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 97
                    echo "                    ";
                }
                // line 98
                echo "                ";
            } else {
                // line 99
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "sizes", array()), "thumbnail", array()), "url", array());
                // line 100
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 101
                echo "                ";
            }
            // line 102
            echo "                <img class=\"supsystic-lazy\" data-original=\"";
            echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "title", array()), "html", null, true);
            echo "\" width=\"150\"
                     style=\"min-height:150px;max-height:150px;\"/>
            </a>

            <p title=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "title", array()), "html", null, true);
            echo "\">
                ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "title", array()), "html", null, true);
            echo "
                <small>
                    ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "dateFormatted", array()), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlist_folder($__folder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $__folder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    <tr data-droppable data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id", array()), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["folder"]) ? $context["folder"] : null)));
            echo "\">
        <th scope=\"row\" class=\"check-column\">
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "title", array())), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"folder[]\" id=\"cb-select-";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id", array()), "html", null, true);
            echo "\"
                   data-observable>
        </th>
        <td class=\"column-icon media-icon\" style=\"position: relative;\">
            <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id", array()), "view" => "list")), "method"), "html", null, true);
            echo "\"
               data-colorbox>
                <img width=\"60\" height=\"60\"
                     src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     class=\"attachment-80x60 supsystic-lazy\" alt=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "title", array()), "html", null, true);
            echo "\">
            </a>

            <div style=\"position: absolute; top: 20px; left: 31px; color: #bdc3c7; z-index: 100;\">
                <i class=\"fa fa-folder-open-o\" style=\"font-size: 3em;\"></i>
            </div>
        </td>
        <td class=\"title column-title\">
            <strong>
                <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "id", array()), "view" => "list")), "method"), "html", null, true);
            echo "\">
                    <span class=\"folder-title\">";
            // line 140
            echo twig_title_string_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "title", array()));
            echo "</span>
                </a>
            </strong>

            <p>
                <span class=\"gg-folder-photos-num\">
                    ";
            // line 146
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "photos", array())), "html", null, true);
            echo "
                </span>
                ";
            // line 148
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "photos", array())) == 1)) {
                // line 149
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photo")), "html", null, true);
                echo "
                ";
            } else {
                // line 151
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photos")), "html", null, true);
                echo "
                ";
            }
            // line 153
            echo "            </p>
        </td>
        <td class=\"date column-date\">";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "date", array()), "html", null, true);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 159
    public function getlist_image($__image__ = null, $__sliderSettings__ = null, $__galleryId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "sliderSettings" => $__sliderSettings__,
            "galleryId" => $__galleryId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 160
            echo "    ";
            $context["nonProMsg"] = "Available in PRO";
            // line 161
            echo "    <tr data-entity data-entity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" data-settings=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["sliderSettings"]) ? $context["sliderSettings"] : null)));
            echo "\" data-entity-type=\"photo\" data-entity-info=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["image"]) ? $context["image"] : null)));
            echo "\" class=\"ggImgInfoRow\">
        <th scope=\"row\" class=\"check-column ggImgVertMoveCol\">
            <i class=\"fa fa-arrows-v ggImgVerticalMove\" aria-hidden=\"true\"></i>
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "title", array())), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"image[]\" id=\"cb-select-";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" data-observable>
        </th>
        <td class=\"column-icon media-icon\">
            <a href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "sizes", array()), "full", array()), "url", array()), "html", null, true);
            echo "\" data-colorbox>
                ";
            // line 170
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "sizes", array()), "thumbnail", array()))) {
                // line 171
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "sizes", array()), "full", array()), "url", array());
                // line 172
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "orientation", array()) == "landscape")) {
                    // line 173
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 174
                    echo "                    ";
                } else {
                    // line 175
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 176
                    echo "                    ";
                }
                // line 177
                echo "                ";
            } else {
                // line 178
                echo "                    ";
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "sizes", array()), "thumbnail", array()), "url", array());
                // line 179
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 180
                echo "                ";
            }
            // line 181
            echo "                <img width=\"75\" height=\"75\" data-original=\"";
            echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html", null, true);
            echo "\"
                     class=\"attachment-thumbnail supsystic-lazy\" alt=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "title", array()), "html", null, true);
            echo "\">
            </a>
\t\t\t<span class=\"gg-image-upload-date description\">";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "gg_wp_upload_date", array()), "html", null, true);
            echo "</span>
        </td>
        <td class=\"title column-title\">
            <form id=\"photo-editor-";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"photo-editor attachment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"gg-tab-links gg-image-params\" data-tabs=\"gg-image-";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"gg-tab-link active\" data-tab-info=\"page-";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-1\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-2\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-3\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-4\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-5\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-6\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-7\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked images")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-8\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Crop")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-9\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover")), "html", null, true);
            echo "</div>

\t\t\t\t\t<a data-image-id=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" data-attachment-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "id", array()), "html", null, true);
            echo "\"
\t\t\t\t\t   class=\"add-new-h2 button replace-image\">
\t\t\t\t\t\t";
            // line 201
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Replace image")), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"gg-tab-pages\" data-tabs=\"gg-image-";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"gg-tab-page\" data-tab-info=\"page-";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-1\">
\t\t\t\t\t\t<p id=\"photo-caption-";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"caption\" value=\"";
            // line 208
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "caption", array());
            echo "\"
\t\t\t\t\t\t\t\t   placeholder=\"";
            // line 209
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "\" style=\"width: 70%;\"/>
\t\t\t\t\t\t\t<button class=\"button selectCaptionEffectBtn\" data-id=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t<input type=\"text\" class=\"captionEffectVal\" name=\"captionEffect\" data-id=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sliderSettings"]) ? $context["sliderSettings"] : null), "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
            echo "\" style=\"display: none;\" />
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-2\">
\t\t\t\t\t\t<p id=\"photo-caption-description-";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 216
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
                // line 217
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" style=\"width: 70%;\" disabled placeholder=\"Description\">
\t\t\t\t\t\t\t\t<span style=\"color:red\" class=\"description\">
\t\t\t\t\t\t\t\t<a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=images_caption_description&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t";
                // line 220
                echo (isset($context["nonProMsg"]) ? $context["nonProMsg"] : null);
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            } else {
                // line 224
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" name=\"captionDescription\" value=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "captionDescription", array());
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
                echo "\" style=\"width: 70%;\"/>
\t\t\t\t\t\t\t";
            }
            // line 226
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-3\">
\t\t\t\t\t\t<p id=\"photo-seo-";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"description\" value=\"";
            // line 230
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "description", array());
            echo "\"
\t\t\t\t\t\t\t\t   style=\"width: 40%;\"
\t\t\t\t\t\t\t\t   placeholder=\"";
            // line 232
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t<input type=\"text\" name=\"alt\" value=\"";
            // line 233
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "alt", array()))) {
                if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "alt", array()) == " ")) {
                    echo "";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "alt", array()), "html", null, true);
                }
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "title", array()), "html", null, true);
            }
            echo "\"
\t\t\t\t\t\t\t\t   style=\"width: 40%;\"
\t\t\t\t\t\t\t\t   placeholder=\"";
            // line 235
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alternative text")), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-4\">
\t\t\t\t\t\t<p id=\"photo-link-";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\tname=\"link\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "external_link", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"width: 50%;\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 245
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("http://example.com/")), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label style=\"border: 1px solid #9D9D9D;padding: 5px;\">
\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\tname=\"target\"
\t\t\t\t\t\t\t\t\t\tvalue=\"_blank\"
\t\t\t\t\t\t\t\t\t\t";
            // line 252
            if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "target", array()) == "_blank")) {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 255
            echo "\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t";
            // line 256
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open in new window")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label style=\"border: 1px solid #9D9D9D;padding: 5px; margin-left: 5px;\">
\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\tname=\"rel\"
\t\t\t\t\t\t\t\t\t\tvalue=\"nofollow\"
\t\t\t\t\t\t\t\t\t\t";
            // line 263
            if (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "rel", array()) == "nofollow")) {
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 266
            echo "\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t";
            // line 267
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add nofollow attribute")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-5\">
\t\t\t\t\t\t<p id=\"photo-video-";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t";
            // line 275
            if ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method")) {
                // line 276
                echo "\t\t\t\t\t\t\t\t\t\tname=\"video\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "video", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 279
                echo "\t\t\t\t\t\t\t\t\t\tdisabled=\"disabled\"
\t\t\t\t\t\t\t\t\t";
            }
            // line 281
            echo "\t\t\t\t\t\t\t\t\tstyle=\"width: 70%;\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 282
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video URL")), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t";
            // line 284
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
                // line 285
                echo "\t\t\t\t\t\t\t\t<span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=video&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
                // line 287
                echo (isset($context["nonProMsg"]) ? $context["nonProMsg"] : null);
                echo "
\t\t\t\t\t\t\t</a>
                        </span>
\t\t\t\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 293
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-6\">
\t\t\t\t\t\t<p id=\"photo-tags-";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == true)) {
                echo "style=\"width: 70%;\"";
            }
            echo ">
\t\t\t\t\t\t\t";
            // line 295
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
                // line 296
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" disabled placeholder=\"Categories\" style=\"width: 70%;\">
\t\t\t\t\t\t\t\t<span style=\"color:red\" class=\"description\">
\t\t\t\t\t\t\t\t\t<a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=imagescategories&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t";
                // line 299
                echo (isset($context["nonProMsg"]) ? $context["nonProMsg"] : null);
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            } else {
                // line 303
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" class=\"gg-tags\" id=\"tags-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t   value=\"";
                // line 304
                echo twig_join_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "tags", array()), ",");
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 306
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-7\">
\t\t\t\t\t\t<p id=\"photo-linked-images-";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 310
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
                // line 311
                echo "\t\t\t\t\t\t\t\t<button class=\"button disabled\" disabled>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t<span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=linked_images&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
                // line 314
                echo (isset($context["nonProMsg"]) ? $context["nonProMsg"] : null);
                echo "
\t\t\t\t\t\t\t</a>
                        </span>
\t\t\t\t\t\t\t";
            } else {
                // line 318
                echo "\t\t\t\t\t\t\t\t<button class=\"button selectLinkedImages\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"linkedImages\" data-id=\"";
                // line 319
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "linkedImages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "linkedImages", array()), "")) : ("")), "html", null, true);
                echo "\" style=\"display: none;\" />
\t\t\t\t\t\t\t";
            }
            // line 321
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 323
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-8\">
\t\t\t\t\t\t<p id=\"photo-crop-";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<label style=\"margin-left: 5px;\">Image crop position: </label>
\t\t\t\t\t\t\t";
            // line 326
            $context["cropPositionList"] = array("left-top" => "Top Left", "center-top" => "Top Center", "right-top" => "Top Right", "left-center" => "Center Left", "center-center" => "Center Center", "right-center" => "Center Right", "left-bottom" => "Bottom Left", "center-bottom" => "Bottom Center", "right-bottom" => "Bottom Right");
            // line 337
            echo "\t\t\t\t\t\t\t<select name=\"cropPosition\">
\t\t\t\t\t\t\t\t";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cropPositionList"]) ? $context["cropPositionList"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                // line 339
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
                if (((($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "cropPosition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "cropPosition", array()), "center-center")) : ("center-center")) == $context["value"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "-9\">
\t\t\t\t\t\t<p id=\"hover-caption-image-";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 346
            if (($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false)) {
                // line 347
                echo "\t\t\t\t\t\t\t\t<button class=\"button disabled\" disabled=\"disabled\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t<span class=\"description\">
\t\t\t\t\t\t\t\t\t<a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=hover_caption_image_bg&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t";
                // line 350
                echo (isset($context["nonProMsg"]) ? $context["nonProMsg"] : null);
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            } else {
                // line 354
                echo "\t\t\t\t\t\t\t\t<input id=\"hover-caption-image-inp-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
                echo "\" type=\"text\" name=\"hoverCaptionImageInp\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "hoverCaptionImage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array(), "any", false, true), "hoverCaptionImage", array()), "")) : ("")), "html", null, true);
                echo "\" style=\"width: 70%;\" readonly=\"readonly\"/>
\t\t\t\t\t\t\t\t<button class=\"button select-hover-caption-image\" data-image-id=\"";
                // line 355
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t";
            }
            // line 357
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <input name=\"replace_attachment_id\" id=\"replace_attachment_id_";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"image_id\" value=\"";
            // line 362
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"attachment_id\" value=\"";
            // line 363
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "attachment", array()), "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"gallery_id\" value=\"";
            // line 364
            echo twig_escape_filter($this->env, (isset($context["galleryId"]) ? $context["galleryId"] : null), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"action\" value=\"grid-gallery\" type=\"hidden\"/>
                <input name=\"route[module]\" value=\"photos\" type=\"hidden\"/>
                <input name=\"route[action]\" value=\"updateAttachment\" type=\"hidden\"/>
            </form>
        </td>
        <td class=\"date column-date\" style=\"text-align: center;\">";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "gg_attachment_wp_date", array()), "html", null, true);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@ui/type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1096 => 370,  1087 => 364,  1083 => 363,  1079 => 362,  1075 => 361,  1069 => 357,  1060 => 355,  1053 => 354,  1046 => 350,  1039 => 347,  1037 => 346,  1031 => 345,  1027 => 344,  1022 => 341,  1007 => 339,  1003 => 338,  1000 => 337,  998 => 326,  991 => 324,  987 => 323,  983 => 321,  976 => 319,  967 => 318,  960 => 314,  953 => 311,  951 => 310,  945 => 309,  941 => 308,  937 => 306,  932 => 304,  925 => 303,  918 => 299,  913 => 296,  911 => 295,  901 => 294,  897 => 293,  893 => 291,  886 => 287,  882 => 285,  880 => 284,  875 => 282,  872 => 281,  868 => 279,  863 => 277,  860 => 276,  858 => 275,  850 => 272,  846 => 271,  839 => 267,  836 => 266,  832 => 264,  830 => 263,  820 => 256,  817 => 255,  813 => 253,  811 => 252,  801 => 245,  796 => 243,  787 => 239,  783 => 238,  777 => 235,  764 => 233,  760 => 232,  755 => 230,  749 => 229,  745 => 228,  741 => 226,  733 => 224,  726 => 220,  721 => 217,  719 => 216,  713 => 215,  709 => 214,  701 => 211,  693 => 210,  689 => 209,  685 => 208,  679 => 207,  675 => 206,  671 => 205,  664 => 201,  657 => 199,  650 => 197,  644 => 196,  638 => 195,  632 => 194,  626 => 193,  620 => 192,  614 => 191,  608 => 190,  602 => 189,  598 => 188,  592 => 187,  586 => 184,  581 => 182,  576 => 181,  573 => 180,  570 => 179,  567 => 178,  564 => 177,  561 => 176,  558 => 175,  555 => 174,  552 => 173,  549 => 172,  546 => 171,  544 => 170,  540 => 169,  532 => 166,  526 => 165,  514 => 161,  511 => 160,  497 => 159,  479 => 155,  475 => 153,  469 => 151,  463 => 149,  461 => 148,  456 => 146,  447 => 140,  443 => 139,  431 => 130,  424 => 126,  415 => 122,  409 => 121,  403 => 118,  398 => 117,  386 => 116,  365 => 109,  360 => 107,  356 => 106,  346 => 102,  343 => 101,  340 => 100,  337 => 99,  334 => 98,  331 => 97,  328 => 96,  325 => 95,  322 => 94,  319 => 93,  316 => 92,  314 => 91,  310 => 90,  302 => 85,  297 => 84,  285 => 83,  264 => 76,  259 => 74,  251 => 69,  239 => 60,  231 => 55,  226 => 54,  214 => 53,  198 => 50,  189 => 48,  185 => 47,  182 => 46,  173 => 44,  169 => 43,  166 => 42,  163 => 41,  151 => 40,  134 => 36,  128 => 35,  126 => 34,  118 => 32,  112 => 31,  103 => 29,  99 => 28,  93 => 25,  87 => 22,  82 => 19,  75 => 15,  69 => 12,  63 => 9,  56 => 4,  53 => 3,  50 => 2,  36 => 1,  31 => 158,  28 => 115,  25 => 82,  22 => 52,  19 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ui/type.twig", "C:\\wamp64\\www\\verissimofotografia.com.br\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Ui\\views\\type.twig");
    }
}
