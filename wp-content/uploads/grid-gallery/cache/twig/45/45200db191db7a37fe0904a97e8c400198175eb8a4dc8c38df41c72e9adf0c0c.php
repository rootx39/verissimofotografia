<?php

/* @galleries/helpers/attachment.twig */
class __TwigTemplate_b59930608e326d51892dd70b5662d0d0b6edb79e9bb09d04b3f141a4e929ec6c extends Twig_Template
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
    }

    // line 1
    public function getimage($__attachmentId__ = null, $__settings__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attachmentId" => $__attachmentId__,
            "settings" => $__settings__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 3
            echo "
\t";
            // line 4
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width_unit", array()) == 0)) {
                // line 5
                echo "\t\t";
                $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_width", array());
                // line 6
                echo "\t";
            }
            // line 7
            echo "
\t";
            // line 8
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height_unit", array()) == 0)) {
                // line 9
                echo "\t\t";
                $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "photo_height", array());
                // line 10
                echo "\t";
            }
            // line 11
            echo "
\t";
            // line 12
            if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area", array()), "grid", array()) == 3))) {
                // line 13
                echo "\t\t";
                $context["crop"] = 1;
                // line 14
                echo "\t";
            } else {
                // line 15
                echo "\t\t";
                $context["height"] = null;
                // line 16
                echo "\t";
            }
            // line 17
            echo "
\t";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array((isset($context["attachmentId"]) ? $context["attachmentId"] : null), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), (isset($context["crop"]) ? $context["crop"] : null))), "html", null, true);
            echo "
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
        return "@galleries/helpers/attachment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  64 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  40 => 4,  37 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/helpers/attachment.twig", "C:\\wamp64\\www\\verissimofotografia.com.br\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\helpers\\attachment.twig");
    }
}
