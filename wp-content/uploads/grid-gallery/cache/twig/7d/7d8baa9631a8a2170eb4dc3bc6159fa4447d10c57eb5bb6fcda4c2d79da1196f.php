<?php

/* @galleries/index.twig */
class __TwigTemplate_777bfab98c5767c29eb8aca63904aa921bb4f98e0fe2917b36e167fd32e43caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/index.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
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
        echo "
    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
    </nav>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    <section id=\"gg-galleries\">

        ";
        // line 17
        if ( !array_key_exists("galleries", $context)) {
            // line 18
            echo "            ";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "
            <div class=\"gg-galleries-grid\">
                ";
            // line 23
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) ? $context["galleries"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 24
                echo "                    <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
                echo "\" class=\"gg-item gg-gallery\" style=\"height: auto;\">
                        <h3 class=\"gallery-title\">";
                // line 25
                echo twig_title_string_filter($this->env, $this->getAttribute($context["gallery"], "title", array()));
                echo "</h3>
                        <div class=\"image\">
                            ";
                // line 28
                echo "                            ";
                $context["cover"] = call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($context["gallery"], "attachment_id", array()), "350", "225", "true"));
                // line 29
                echo "
                            ";
                // line 30
                if ((twig_length_filter($this->env, (isset($context["cover"]) ? $context["cover"] : null)) < 1)) {
                    // line 31
                    echo "                                ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["gallery"], "settings", array()), "posts", array()), "postCover", array())) > 1)) {
                        // line 32
                        echo "                                    ";
                        $context["cover"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["gallery"], "settings", array()), "posts", array()), "postCover", array());
                        // line 33
                        echo "                                ";
                    }
                    // line 34
                    echo "                            ";
                }
                // line 35
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("cover", $context)) ? (_twig_default_filter((isset($context["cover"]) ? $context["cover"] : null), ("holder.js/350x220?theme=gray&text=" . $this->getAttribute($context["gallery"], "title", array())))) : (("holder.js/350x220?theme=gray&text=" . $this->getAttribute($context["gallery"], "title", array())))), "html", null, true);
                echo "\" alt=\"";
                echo $this->getAttribute($context["gallery"], "title", array());
                echo "\" width=\"350px\" height=\"220px\"/>
                            ";
                // line 37
                echo "                            ";
                // line 41
                echo "                            <div class=\"sgg-images-info\" style=\"padding-left: 20px;position: relative;\">
                                <h4>
                                    ";
                // line 43
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images: ")), "html", null, true);
                echo "
                                    <div class=\"gg-counter\"
                                         style=\"display: inline-block; font-weight: 200; margin-right: 20px;\"
                                         title=\"";
                // line 46
                echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There are %s photos in the gallery %s")), twig_length_filter($this->env, $this->getAttribute($context["gallery"], "photos", array())), $this->getAttribute($context["gallery"], "title", array())), "html", null, true);
                echo "\">
                                        ";
                // line 47
                echo twig_escape_filter($this->env, ($this->getAttribute($context["gallery"], "total", array()) + (($this->getAttribute($this->getAttribute($this->getAttribute($context["gallery"], "settings", array(), "any", false, true), "posts", array(), "any", false, true), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["gallery"], "settings", array(), "any", false, true), "posts", array(), "any", false, true), "length", array()), 0)) : (0))), "html", null, true);
                echo "
                                    </div>
                                    ";
                // line 50
                echo "                                    ";
                // line 51
                echo "                                    ";
                // line 52
                echo "                                </h4>
                            </div>
                        </div>
                        <div class=\"controls-wrap\" style=\"display: inline-block; margin-top: 10px;\">
                            <!-- Control buttons -->
                            <ul class=\"gg-control-btn\">
                                <li>
                                    <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-gear\"></i>
                                        ";
                // line 62
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Settings")), "html", null, true);
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-bars\"></i>
                                        ";
                // line 69
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-eye\"></i>
                                        ";
                // line 76
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
                echo "
                                    </a>
                                </li>
                            </ul>
                            <ul class=\"gg-control-btn\">
                                ";
                // line 82
                echo "                                    ";
                // line 83
                echo "                                        ";
                // line 84
                echo "                                        ";
                // line 85
                echo "                                    ";
                // line 86
                echo "                                ";
                // line 87
                echo "                                <li title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
                echo "\">
                                    <button class=\"button button-primary gallery import-to-gallery\" id=\"!sgg-btn-upload\" data-folder-id=\"0\"
                                            data-gallery-id=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
                echo "\" ";
                echo ">
                                        <i class=\"fa fa-fw fa-camera\"></i>
                                        ";
                // line 91
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
                echo "
                                    </button>
                                </li>
                                <li>
                                    <a id=\"delete-gallery\" data-confirm=\"";
                // line 95
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you sure you want to delete this gallery?")), "html", null, true);
                echo "\" class=\"button button-primary\" title=\"Delete this gallery\"
                                       href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "delete", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()), "_wpnonce" => (isset($context["_wpnonce"]) ? $context["_wpnonce"] : null))), "method"), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-trash-o\"></i>
                                        ";
                // line 98
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete gallery")), "html", null, true);
                echo "
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"shortcode-wrap\">
                            <div class=\"gg-shortcode\">
                                ";
                // line 105
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
                echo "<br /><br /> <input type=\"text\" id=\"shortcode-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
                echo "\" class=\"ggCopyTextCode shortcode\" value=\"[supsystic-gallery id='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
                echo "']\"><br /><br />
                                ";
                // line 106
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
                echo "<br /><br /> 
                                <input type=\"text\" id=\"phpcode-";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
                echo "\" class=\"ggCopyTextCode phpcode\"
                                       value=\"";
                // line 108
                echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute($context["gallery"], "id", array())) . "]') ?>"), "html", null, true);
                echo "\">
                            </div>
                        </div>
                    </div>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 113
                echo "                    <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no galleries")), "html", null, true);
                echo "</h3>
                    <p>
                        ";
                // line 115
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You don't have any galleries yet.")), "html", null, true);
                echo "
                        <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "showPresets"), "method"), "html", null, true);
                echo "\"
                           id=\"gg-create-gallery-link\"
                           style = \"color: #4ae8ea;\">";
                // line 118
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Want to create one right now?")), "html", null, true);
                echo "</a>
                    </p>

                    <h3>";
                // line 121
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("What is a gallery")), "html", null, true);
                echo "</h3>
                    <p>
                        ";
                // line 123
                echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array("<strong>Gallery</strong> &mdash; the highest type of entity in the Gallery by Supsystic."));
                echo "
                        <br/>
                        ";
                // line 125
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You can have an unlimited number of galleries, to which you can attach the preloaded pictures.")), "html", null, true);
                echo "
                        ";
                // line 126
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Each gallery has a number of display settings and behaviors that you can save to presets and apply to other galleries.")), "html", null, true);
                echo "
                    </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "            </div>
        ";
        }
        // line 131
        echo "    </section>

    ";
        // line 154
        echo "
    <!-- Create dialog -->
    ";
        // line 197
        echo "
    ";
        // line 198
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/index.twig", 198);
        // line 199
        echo "    <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 200
        echo $context["importTypes"]->getshow(400);
        echo "
    </div>

";
    }

    // line 133
    public function getputPreset($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "        <div class=\"preset ";
            if ((($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pro", array()))) {
                echo "disabled";
            }
            echo "\"
             data-preset=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), "html", null, true);
            echo "\">
            <p>";
            // line 136
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array())), "html", null, true);
            echo "</p>
            <img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
            echo "/assets/img/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "image", array()), "html", null, true);
            echo "\" alt=\"\"/>
            ";
            // line 138
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pro", array()) && ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false))) {
                // line 139
                echo "                <a class=\"button button-primary inPro\"
                    ";
                // line 140
                if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()) == "Categories")) {
                    // line 141
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 143
                echo "                    ";
                if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()) == "Icons")) {
                    // line 144
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 146
                echo "                    ";
                if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()) == "Pagination")) {
                    // line 147
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 149
                echo "                    Available in PRO
                </a>
            ";
            }
            // line 152
            echo "        </div>
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
        return "@galleries/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 152,  395 => 149,  391 => 147,  388 => 146,  384 => 144,  381 => 143,  377 => 141,  375 => 140,  372 => 139,  370 => 138,  364 => 137,  360 => 136,  356 => 135,  349 => 134,  337 => 133,  329 => 200,  324 => 199,  322 => 198,  319 => 197,  315 => 154,  311 => 131,  307 => 129,  298 => 126,  294 => 125,  289 => 123,  284 => 121,  278 => 118,  273 => 116,  269 => 115,  263 => 113,  253 => 108,  249 => 107,  245 => 106,  237 => 105,  227 => 98,  222 => 96,  218 => 95,  211 => 91,  205 => 89,  199 => 87,  197 => 86,  195 => 85,  193 => 84,  191 => 83,  189 => 82,  181 => 76,  175 => 73,  168 => 69,  162 => 66,  155 => 62,  149 => 59,  140 => 52,  138 => 51,  136 => 50,  131 => 47,  127 => 46,  121 => 43,  117 => 41,  115 => 37,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  94 => 30,  91 => 29,  88 => 28,  83 => 25,  78 => 24,  72 => 23,  68 => 20,  65 => 19,  63 => 18,  61 => 17,  56 => 14,  53 => 13,  43 => 8,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/index.twig", "C:\\wamp64\\www\\verissimofotografia.com.br\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\index.twig");
    }
}
