<?php

/* @galleries/gallery_preset.twig */
class __TwigTemplate_a7c1d494e96a8b154c9b1d0fdb1d62302a31df3c3a99b4c89289c578685dbe2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/gallery_preset.twig", 1);
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

    // line 25
    public function block_header($context, array $blocks = array())
    {
        // line 26
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "galleries", 1 => "showPresets"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create new gallery")), "html", null, true);
        echo "</a>
    </nav>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "    <h3 style=\"margin-left: 10px;padding-bottom: 10px !important;border-bottom: 1px solid;\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Gallery Template. You can change template and settings on the next step.")), "html", null, true);
        echo "</h3>
    <div id=\"gg-create-gallery-text\">
        <h3 style=\"float: left; margin: 10px !important;\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")), "html", null, true);
        echo "</h3>
        <input name=\"title\" type=\"text\" style=\"float: left; width: 60%;\"/>
        <button id=\"gallery-create\" class=\"button button-primary\" type=\"button\">
            <i class=\"fa fa-check\"></i>
            ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
        </button>
        ";
        // line 45
        echo "
        <div class=\"clear\"></div>
        <input id=\"presetValue\" name=\"preset\" type=\"hidden\" value=\"1\"/>
    </div>
    ";
        // line 50
        echo "    <div id=\"gg-create-gallery-text\">
        <div class=\"presetSelect\">
            ";
        // line 52
        $context["preset"] = $this;
        // line 53
        echo "
            ";
        // line 54
        $context["presets"] = array(0 => array("title" => "Standard Gallery", "image" => "template1.jpg", "pro" => false, "value" => 1), 1 => array("title" => "Vertical Gallery", "image" => "template2.jpg", "pro" => false, "value" => 2), 2 => array("title" => "Rounded Gallery", "image" => "template3.jpg", "pro" => false, "value" => 3), 3 => array("title" => "Horizontal Gallery", "image" => "template4.jpg", "pro" => false, "value" => 4), 4 => array("title" => "Categories and Icons", "image" => "template5.jpg", "pro" => true, "value" => 5), 5 => array("title" => "Post feed and Pagination", "image" => "template6.jpg", "pro" => true, "value" => 6), 6 => array("title" => "Post feed Slide Up", "image" => "template7.jpg", "pro" => true, "value" => 7), 7 => array("title" => "Post feed Description", "image" => "template8.jpg", "pro" => true, "value" => 8), 8 => array("title" => "Mosaic Gallery", "image" => "template9.png", "pro" => true, "value" => 9));
        // line 65
        echo "
            ";
        // line 67
        echo "            ";
        // line 70
        echo "
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["presets"]) ? $context["presets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 72
            echo "                ";
            echo $context["preset"]->getputPreset($context["data"]);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>
    </div>
    <div id=\"gg-create-gallery-loader\" style=\"display: none;\">
        <p class=\"gg-centered\">

        <div class=\"gg-inline-loader gg-centered\"></div>
        </p>
    </div>
";
    }

    // line 3
    public function getputPreset($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <div class=\"preset ";
            if ((($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pro", array()))) {
                echo "disabled";
            }
            echo "\"
         data-preset=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), "html", null, true);
            echo "\">
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "getModule", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
            echo "/assets/img/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "image", array()), "html", null, true);
            echo "\" alt=\"\"/>
        ";
            // line 7
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pro", array()) && ($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "isPro", array(), "method") == false))) {
                // line 8
                echo "            <a class=\"button button-primary\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"position: absolute; top: 50%; left: 30%; background-color: #ffffff;\">
                Available in PRO
            </a>
        ";
            } else {
                // line 12
                echo "            <div style=\"position: absolute; top: 50%; left: 50%; transform:translate(-50%, -50%); display:table;\">
                <a class=\"button button-primary button-select\" style=\"background-color: #ffffff;\">
                    Select
                </a>
                <span class=\"selected-preset\">";
                // line 16
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Selected")), "html", null, true);
                echo "</span>
            </div>
        ";
            }
            // line 19
            echo "        <div class=\"preset-overlay\">
            <h3>";
            // line 20
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array())), "html", null, true);
            echo "</h3>
        </div>
    </div>
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
        return "@galleries/gallery_preset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 20,  171 => 19,  165 => 16,  159 => 12,  153 => 8,  151 => 7,  145 => 6,  141 => 5,  134 => 4,  122 => 3,  110 => 74,  101 => 72,  97 => 71,  94 => 70,  92 => 67,  89 => 65,  87 => 54,  84 => 53,  82 => 52,  78 => 50,  72 => 45,  67 => 40,  60 => 36,  54 => 34,  51 => 33,  42 => 29,  35 => 27,  32 => 26,  29 => 25,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/gallery_preset.twig", "C:\\wamp64\\www\\verissimofotografia.com.br\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\gallery_preset.twig");
    }
}
