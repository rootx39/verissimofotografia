<?php

/* @optimization/index.twig */
class __TwigTemplate_3f790671f8a35a1ad4248e44d691f5d7a893ffbc58e3c8868f9d00dc22f502f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@optimization/index.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "generateUrl", array(0 => "optimization"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Optimization")), "html", null, true);
        echo "</a>
    </nav>

    <div class=\"sgg-io-tabs-links-list sgg-main-tab-anch\">
        <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-maintab-image-opt\">
            <i class=\"fa fa-compress\"></i>
            ";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Optimize")), "html", null, true);
        echo "
        </a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-maintab-transfer-cdn\">
            <i class=\"fa fa-cloud-upload\"></i>
            ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer to CDN")), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["imgOptTemplate"] = $this;
        // line 24
        echo "    <div class=\"supsystic-image-optimize\">
        <div class=\"sgg-io-tabs-list sgg-main-tab-anch\">
            <input id=\"sggImgOptMainTabName\" name=\"sggImgOptMainTabName\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["tabName"]) ? $context["tabName"] : null), "html", null, true);
        echo "\" type=\"hidden\"/>
            <div class=\"sgg-io-one-tab sgg-maintab-image-opt\">
                ";
        // line 28
        echo $context["imgOptTemplate"]->getimageOptimizeMainDialog((isset($context["imgOptTemplate"]) ? $context["imgOptTemplate"] : null), (isset($context["imgOptimizationSett"]) ? $context["imgOptimizationSett"] : null));
        echo "
                ";
        // line 29
        echo $context["imgOptTemplate"]->getimageOptimizeMainTab((isset($context["imgOptTemplate"]) ? $context["imgOptTemplate"] : null), (isset($context["imgOptimizationSett"]) ? $context["imgOptimizationSett"] : null), (isset($context["galleryList"]) ? $context["galleryList"] : null), (isset($context["statistic"]) ? $context["statistic"] : null));
        echo "
            </div>
            <div class=\"sgg-io-one-tab sgg-maintab-transfer-cdn sgg-io-tab-hidden\">
\t\t\t\t";
        // line 32
        if (((isset($context["cdnSett"]) ? $context["cdnSett"] : null) == null)) {
            // line 33
            echo "\t\t\t\t\t<div class=\"sgg-error-list-page\">
\t\t\t\t\t\t<h2>";
            // line 34
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your host does not support the minimum requirements:")), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cdnRequirements"]) ? $context["cdnRequirements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["elem1"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<h3>";
                echo twig_escape_filter($this->env, $context["elem1"], "html", null, true);
                echo "</h3>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t";
            echo $context["imgOptTemplate"]->gettransferToCdnDialog((isset($context["cdnSett"]) ? $context["cdnSett"] : null));
            echo "
\t\t\t\t\t";
            // line 41
            echo $context["imgOptTemplate"]->getimageOptimizeCdnTab((isset($context["cdnSett"]) ? $context["cdnSett"] : null), (isset($context["galleryList"]) ? $context["galleryList"] : null));
            echo "
\t\t\t\t\t";
            // line 42
            echo $context["imgOptTemplate"]->getcdnServiceSettingDialog((isset($context["cdnSett"]) ? $context["cdnSett"] : null));
            echo "
\t\t\t\t";
        }
        // line 44
        echo "            </div>
        </div>
    </div>
";
    }

    // line 49
    public function getimageOptimizeCdnTab($__cdnSettings__ = null, $__cdnGalleryList__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSettings" => $__cdnSettings__,
            "cdnGalleryList" => $__cdnGalleryList__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "    <input type=\"hidden\" id=\"sgg-transfer-to-cdn-used\";/>
    <div class=\"supsystic-io-block sgg-cdn-service-block\">
        <div class=\"supsystic-io-block-table sgg-cnd-service-info\">
            <div class=\"supsystic-io-block-row\">
                <div class=\"supsystic-io-block-cell sgg-io-tab-hidden\">
                    <input value=\"keycdn\" ";
            // line 55
            if (($this->getAttribute((isset($context["cdnSettings"]) ? $context["cdnSettings"] : null), "current", array()) == "keycdn")) {
                echo " checked=\"checked\" ";
            }
            echo " type=\"radio\" class=\"selected-cnd-opt-service\" name=\"selected-cdn-opt-service\"/>
                </div>
                <div class=\"supsystic-io-block-cell\">";
            // line 57
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("KeyCDN")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">
                    <a href=\"\" class=\"button sgg-setup-button\" data-dialog-code=\"keycdn\"  data-dialog-title=\"";
            // line 59
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("KeyCDN Settings")), "html", null, true);
            echo "\">
                        <i class=\"fa fa-info-circle\"></i>
                        ";
            // line 61
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSettings"]) ? $context["cdnSettings"] : null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSettings"]) ? $context["cdnSettings"] : null), "setting", array()), "keycdn", array()), "u_name", array()) != ""))) {
                // line 62
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change Details")), "html", null, true);
                echo "
                        ";
            } else {
                // line 64
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Setup")), "html", null, true);
                echo "
                        ";
            }
            // line 66
            echo "                    </a>
                </div>
            </div>
        </div>
    </div>
\t<div class=\"supsystic-io-block sgg-cdn-list\">
\t\t<input id=\"sgg-cdn-auth-sett\" type=\"hidden\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["cdnSettings"]) ? $context["cdnSettings"] : null)), "html", null, true);
            echo "\"/>
        <button class=\"button sgg-transer-to-cdn\" disabled=\"disabled\">";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer selected")), "html", null, true);
            echo "</button>

        <div class=\"supsystic-io-block-table sgg-transfer-to-cdn-table\">
            <div class=\"supsystic-io-block-row sgg-table-row-header\">
                <div class=\"supsystic-io-block-cell\"></div>
                <div class=\"supsystic-io-block-cell\">";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 79
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Images")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 81
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Location")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\"></div>
            </div>

\t\t\t";
            // line 85
            $context["disableTransferBtn"] = false;
            // line 86
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSettings"]) ? $context["cdnSettings"] : null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSettings"]) ? $context["cdnSettings"] : null), "setting", array()), "keycdn", array()), "u_name", array()) != ""))) {
                // line 87
                echo "\t\t\t\t";
                $context["disableTransferBtn"] = false;
                // line 88
                echo "\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t";
                $context["disableTransferBtn"] = true;
                // line 90
                echo "\t\t\t";
            }
            // line 91
            echo "
            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cdnGalleryList"]) ? $context["cdnGalleryList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["gallInfo"]) {
                // line 93
                echo "                <div class=\"supsystic-io-block-row sgg-cdn-info-row-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                echo "\">
                    <div class=\"supsystic-io-block-cell\">
\t\t\t\t\t\t<input class=\"sgg-check-gallery-inp\" name=\"sgg-check-gallery-inp\" type=\"checkbox\"
\t\t\t\t\t\t\t   data-gallery-size=\"";
                // line 96
                if ($this->getAttribute($context["gallInfo"], "cdn_size", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "cdn_size", array()), "html", null, true);
                    echo " ";
                } elseif ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\"
\t\t\t\t\t\t\t   data-gallery-img-cnt=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                echo "\"/>
                    </div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "title", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">
\t\t\t\t\t\t";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell sgg-cdn-info-size\">
\t\t\t\t\t\t";
                // line 104
                if ($this->getAttribute($context["gallInfo"], "cdn_size", array(), "any", true, true)) {
                    // line 105
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["gallInfo"], "cdn_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 106
$context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    // line 107
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["gallInfo"], "optimized_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "-";
                }
                // line 109
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell sgg-cdn-info-tr-date\">
\t\t\t\t\t\t";
                // line 111
                if (($this->getAttribute($context["gallInfo"], "cdn_last_transfer_date", array(), "any", true, true) && $this->getAttribute($context["gallInfo"], "cdn_service_name", array(), "any", true, true))) {
                    // line 112
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["gallInfo"], "cdn_service_name", array()) . " / ") . $this->getAttribute($context["gallInfo"], "cdn_last_transfer_date", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 113
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("website")), "html", null, true);
                }
                // line 114
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">
\t\t\t\t\t\t<button class=\"button sgg-transfer-to\" data-gallery-id=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 117
                if (((isset($context["disableTransferBtn"]) ? $context["disableTransferBtn"] : null) == true)) {
                    echo " ";
                    echo "disabled=\"disabled\"";
                    echo " ";
                }
                // line 118
                echo "\t\t\t\t\t\t\t\tdata-photo-count=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tdata-img-size=\"";
                // line 119
                if ($this->getAttribute($context["gallInfo"], "cdn_size", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "cdn_size", array()), "html", null, true);
                    echo " ";
                } elseif ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 120
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer to")), "html", null, true);
                echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>
\t</div>
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

    // line 129
    public function gettransferToCdnDialog($__cdnSettings__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSettings" => $__cdnSettings__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "\t<div id=\"transfer-to-cdn-dialog\">";
            // line 131
            echo "\t\t<div class=\"sgg-io-tabs-links-list sgg-il-transfer-dialog sgg-io-tab-hidden\">
\t\t\t<a href=\"#\" class=\"sgg-io-tab-link \" data-tab-id=\"sgg-il-transfer-start\">1</a>
\t\t\t<a href=\"#\" class=\"sgg-io-tab-link \" data-tab-id=\"sgg-il-transfer-process\">2</a>
\t\t</div>

\t\t<div class=\"sgg-io-tabs-list sgg-il-transfer-dialog\">
        \t<div class=\"sgg-io-one-tab sgg-il-transfer-start\">
\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer Gallery to")), "html", null, true);
            echo "
\t\t\t\t\t<strong><span class=\"sgg-cdn-service-name\">";
            // line 140
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Servicename")), "html", null, true);
            echo "</span></strong>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t<strong>";
            // line 143
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total images")), "html", null, true);
            echo ":</strong>
\t\t\t\t\t<span class=\"sgg-cdndlg-img-count\">55</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cnddlg-imgs-size-row\">
\t\t\t\t\t<strong>";
            // line 147
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size")), "html", null, true);
            echo ":</strong>
\t\t\t\t\t<span class=\"sgg-cnddlg-imgs-size\">66</span> ";
            // line 148
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 151
            echo "\t\t\t\t\t";
            // line 152
            echo "\t\t\t\t\t\t";
            // line 153
            echo "\t\t\t\t\t\t";
            // line 154
            echo "\t\t\t\t\t";
            // line 155
            echo "\t\t\t\t";
            // line 156
            echo "\t\t\t\t<input type=\"hidden\" id=\"sgg-transl-start-transf\" value=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Start Transfer")), "html", null, true);
            echo "\"/>
\t\t\t</div>

\t\t\t<div class=\"sgg-io-one-tab sgg-il-transfer-process\">
\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t";
            // line 161
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Connected to")), "html", null, true);
            echo "
\t\t\t\t\t<strong><span class=\"sgg-cdn-service-name\">Servicename</span></strong>
\t\t\t\t\t";
            // line 163
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("service")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row\"><strong>";
            // line 165
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer information:")), "html", null, true);
            echo "</strong></div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdndlg-info\">
\t\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t\t<span id=\"sgg-cdn-curr-gallery\">2</span>
\t\t\t\t\t\t";
            // line 169
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
\t\t\t\t\t\t<span id=\"sgg-cdn-gallery-count\">22</span>
\t\t\t\t\t\t";
            // line 171
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("galleries")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t\t<span id=\"sgg-cdn-curr-img\">1</span>
\t\t\t\t\t\t";
            // line 175
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
\t\t\t\t\t\t<span id=\"sgg-cdn-img-count\">34</span>
\t\t\t\t\t\t<span class=\"sgg-cdn-img-text1\">";
            // line 177
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdn-info-error\">
\t\t\t\t\t<span>";
            // line 181
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer ending with errors!")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdn-info-succ\">
\t\t\t\t\t<span>";
            // line 184
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer completed successfully!")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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

    // line 191
    public function getimageOptimizeMainDialog($___selfTemplate__ = null, $__ioSetting__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 192
            echo "    <input type=\"hidden\" id=\"sgg-ai-optimize-sel-auth\" value=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["ioSetting"]) ? $context["ioSetting"] : null)), "html", null, true);
            echo "\"/>
    <div class=\"sgg-io-tabs-links-list sgg-il-optimize-dlg-wnd sgg-io-tab-hidden\">
        <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-il-optimize-start\">FirstPage</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-servlist\">Service List</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-process\">Image Optimize process</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-result\">Image Optimize Result</a>
    </div>

    <!--  sgg-io-tab-hidden -->
    <div class=\"sgg-io-tabs-list sgg-il-optimize-dlg-wnd\">
        <div class=\"sgg-io-one-tab sgg-il-optimize-start sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-1\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image optimization")), "html", null, true);
            echo "\"/>
\t\t\t<input type=\"hidden\" id=\"sgg-transl-start-opt-1\" value=\"";
            // line 204
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Start Optimization")), "html", null, true);
            echo "\"/>

            ";
            // line 207
            echo "                ";
            // line 208
            echo "                ";
            // line 209
            echo "                    ";
            // line 210
            echo "                        ";
            // line 211
            echo "                    ";
            // line 212
            echo "                ";
            // line 213
            echo "                    ";
            // line 214
            echo "                ";
            // line 215
            echo "            ";
            // line 216
            echo "
            <div class=\"sgg-il-os-item\">
                <div class=\"sgg-il-os-onerow\">";
            // line 218
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images")), "html", null, true);
            echo ":
\t\t\t\t\t<div id=\"sgg-il-full-img-cnt-div\" class=\"sgg-il-img-cnt-type-obj\">
\t\t\t\t\t\t<span id=\"sgg-il-amount-img-cnt\">18</span>
\t\t\t\t\t\t(<span class=\"sgg-il-preview-img-cnt\">9</span> preview and <span class=\"sgg-il-original-img-cnt\">9</span> original images)
\t\t\t\t\t</div>
\t\t\t\t</div><br/>
                <div id=\"sgg-iop-totalrow\" class=\"sgg-il-os-onerow\">";
            // line 224
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo ":
\t\t\t\t\t<span id=\"sgg-il-gallery-size\">00</span>
\t\t\t\t\t<span id=\"sgg-il-gallery-units\">";
            // line 226
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
            </div>
            <label for=\"sgg-il-backup-img-src\" class=\"sgg-il-os-item\">
                <input id=\"sgg-il-backup-img-src\" class=\"sgg-il-checkbox-prm\" name=\"sgg-il-backup-img-src\" type=\"checkbox\" checked=\"checked\"/>
                ";
            // line 231
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Backup Images Source")), "html", null, true);
            echo "
            </label>
            <label for=\"sgg-il-optimize-preview\" class=\"sgg-il-os-item\">
                <input id=\"sgg-il-optimize-preview\" class=\"sgg-il-checkbox-prm\" name=\"sgg-il-optimize-preview\" type=\"checkbox\" checked=\"checked\"/>
                ";
            // line 235
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize Preview images")), "html", null, true);
            echo "
            </label>
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-servlist sgg-io-tab-hidden\">
            ";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_selfTemplate"]) ? $context["_selfTemplate"] : null), "imageOptimizeServiceSettingTable", array(0 => (isset($context["_selfTemplate"]) ? $context["_selfTemplate"] : null), 1 => (isset($context["ioSetting"]) ? $context["ioSetting"] : null)), "method"), "html", null, true);
            echo "
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-process sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-2\" value=\"";
            // line 242
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization in process...")), "html", null, true);
            echo "\"/>
            <div class=\"sgg-optimize-info sgg-io-tab-hidden\">
                <div>
                    ";
            // line 245
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Connected to")), "html", null, true);
            echo "
                    <strong><span id=\"sgg-conn-to-serv-name\">servicename</span></strong>
                    ";
            // line 247
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("service")), "html", null, true);
            echo "
                </div>
                <div><strong>";
            // line 249
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize:")), "html", null, true);
            echo "</strong></div>
                <div>
                    <span id=\"sgg-opt-curr-gallery\">curr</span>
                    ";
            // line 252
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
                    <span id=\"sgg-opt-numb-gallery\">numb</span>
                    ";
            // line 254
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("galleries")), "html", null, true);
            echo "
                </div>
                <div>
                    <span id=\"sgg-opt-curr-img\">curr</span>
                    ";
            // line 258
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
                    <span id=\"sgg-opt-numb-imgs\">numb</span>
                    <span class=\"sgg-iop-without-prev\">";
            // line 260
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
            echo "</span>
                    <span class=\"sgg-iop-with-prev\">";
            // line 261
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images (preview and original images)")), "html", null, true);
            echo "</span>
                </div>
                <div class=\"sgg-opt-info-error sgg-io-tab-hidden\">
                    <span>";
            // line 264
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Error ocured. Optimize process stopped!")), "html", null, true);
            echo "</span>
                </div>
            </div>
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-result sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-3\" value=\"";
            // line 269
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization complete")), "html", null, true);
            echo "\"/>
            <div class=\"sgg-iores-info\">
                <div class=\"sgg-iores-txt\">
                    ";
            // line 272
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images size before:")), "html", null, true);
            echo "
                    <span class=\"sgg-iores-tsizebefore\">0</span>
                    ";
            // line 274
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
                </div>
                <div class=\"sgg-iores-txt\">
                    ";
            // line 277
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images size after:")), "html", null, true);
            echo "
                    <span class=\"sgg-iores-tsizeafter\">0</span>
                    ";
            // line 279
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
                </div>
                <div class=\"sgg-iores-txt\">
                    ";
            // line 282
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Saving:")), "html", null, true);
            echo " <span class=\"sgg-iores-tsaving\">0</span>%
                </div>
            </div>
            <br/>
            <button class=\"button sgg-il-optimize-again-btn\">
                <i class=\"fa fa-compress\"></i>
                ";
            // line 288
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize one more time")), "html", null, true);
            echo "
            </button>
            <br/>
            <a href=\"\" class=\"sgg-iores-link-compare\">
                ";
            // line 292
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show image comparision")), "html", null, true);
            echo "
            </a>

            <div class=\"supsystic-io-block-table sgg-iores-compare-wrap sgg-io-tab-hidden\">
                <!-- Rows to compare Images -->
            </div>
            <div class=\"sgg-iores-cmp-template sgg-io-tab-hidden\">
                <div class=\"supsystic-io-block-row sgg-compare-first-row\">
                    <div class=\"supsystic-io-block-cell\"><h3>";
            // line 300
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Before")), "html", null, true);
            echo "</h3></div>
                    <div class=\"supsystic-io-block-cell\"><h3>";
            // line 301
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("After")), "html", null, true);
            echo "</h3></div>
                </div>
            </div>
        </div>
    </div>

    ";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_selfTemplate"]) ? $context["_selfTemplate"] : null), "imageOptimizeServiceSettingsDialog", array(0 => (isset($context["ioSetting"]) ? $context["ioSetting"] : null)), "method"), "html", null, true);
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

    // line 310
    public function getimageOptimizeServiceSettingTable($___selfTemplate__ = null, $__ioSetting__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 311
            echo "    <div class=\"supsystic-io-block sgg-service-setting\">
        <div class=\"supsystic-io-block-table sgg-service-info\">
            <div class=\"supsystic-io-block-row\">
                <div class=\"supsystic-io-block-cell sgg-io-tab-hidden\">
                    <input value=\"tinypng\" ";
            // line 315
            if (($this->getAttribute((isset($context["ioSetting"]) ? $context["ioSetting"] : null), "current", array()) == "tinypng")) {
                echo " checked=\"checked\" ";
            }
            echo " type=\"radio\" class=\"selected-opt-service\" name=\"selected-opt-service\"/>
                </div>
                <div class=\"supsystic-io-block-cell\">";
            // line 317
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">
                    <a href=\"\" class=\"button sgg-setup-button\" data-dialog-code=\"tinypng\"  data-dialog-title=\"";
            // line 319
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG Settings")), "html", null, true);
            echo "\">
                        <i class=\"fa fa-info-circle\"></i>
                        ";
            // line 321
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ioSetting"]) ? $context["ioSetting"] : null), "setting", array(), "any", false, true), "tinypng", array(), "any", false, true), "auth_key", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ioSetting"]) ? $context["ioSetting"] : null), "setting", array()), "tinypng", array()), "auth_key", array()) != ""))) {
                // line 322
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change Details")), "html", null, true);
                echo "
                        ";
            } else {
                // line 324
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Setup")), "html", null, true);
                echo "
                        ";
            }
            // line 326
            echo "                    </a>
                </div>
            </div>
            ";
            // line 330
            echo "                ";
            // line 331
            echo "                    ";
            // line 332
            echo "                ";
            // line 333
            echo "                ";
            // line 334
            echo "                ";
            // line 335
            echo "                    ";
            // line 336
            echo "                        ";
            // line 337
            echo "                        ";
            // line 338
            echo "                    ";
            // line 339
            echo "                ";
            // line 340
            echo "            ";
            // line 341
            echo "        </div>
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

    // line 345
    public function getimageOptimizeMainTab($___selfTemplate__ = null, $__ioSetting__ = null, $__galleryList__ = null, $__statistic__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "galleryList" => $__galleryList__,
            "statistic" => $__statistic__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 346
            echo "    <input type=\"hidden\" id=\"sgg-optimize-main-tab-inp\"/>
    ";
            // line 347
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_selfTemplate"]) ? $context["_selfTemplate"] : null), "imageOptimizeServiceSettingTable", array(0 => (isset($context["_selfTemplate"]) ? $context["_selfTemplate"] : null), 1 => (isset($context["ioSetting"]) ? $context["ioSetting"] : null)), "method"), "html", null, true);
            echo "

    <div class=\"supsystic-io-block sgg-io-stat-block\">
        <!--<div class=\"sgg-io-tabs-links-list sgg-io-stat-anch\">
            <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-io-one-tab\">All</a>
            <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-stat-tab-1\">TinyPNG</a>
            <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-stat-tab-2\">Another Service</a>
        </div>-->
        <div class=\"sgg-io-tabs-list sgg-io-stat-anch\">
            <div class=\"sgg-io-one-tab sgg-stat-tab-1\">
                ";
            // line 357
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_selfTemplate"]) ? $context["_selfTemplate"] : null), "oneImageOptimizeStatTable", array(0 => "tinypng", 1 => "", 2 => (isset($context["statistic"]) ? $context["statistic"] : null)), "method"), "html", null, true);
            echo "
            </div>
            <!-- <div class=\"sgg-io-one-tab sgg-stat-tab-2 sgg-io-tab-hidden\">
                ";
            // line 361
            echo "            </div>-->
        </div>
    </div>

    <div class=\"supsystic-io-block sgg-optimize-list\">
        <button class=\"button sgg-optimize-selected\" disabled=\"disabled\">";
            // line 366
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize selected")), "html", null, true);
            echo "</button>
        <div class=\"supsystic-io-block-table sgg-gallery-opt-table\">
            <div class=\"supsystic-io-block-row sgg-table-row-header\">
                <div class=\"supsystic-io-block-cell\"></div>
                <div class=\"supsystic-io-block-cell\">";
            // line 370
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 371
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Images")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 372
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 373
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\"></div>
            </div>
            ";
            // line 376
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["galleryList"]) ? $context["galleryList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["gallInfo"]) {
                // line 377
                echo "                <div class=\"supsystic-io-block-row\">
                    <div class=\"supsystic-io-block-cell\">
                        <input class=\"sgg-checkb-inp\" type=\"checkbox\" value=\"";
                // line 379
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                echo "\"
                               data-once-optimize=\"";
                // line 380
                if (($this->getAttribute($context["gallInfo"], "last_optimize_date", array(), "any", true, true) && $this->getAttribute($context["gallInfo"], "service_name", array(), "any", true, true))) {
                    echo "1";
                } else {
                    echo "0";
                }
                echo "\"
                               data-gallery-total-size=\"";
                // line 381
                if ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\"
                               data-phot-count=\"";
                // line 382
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "\"
                        />
                    </div>
                    <div class=\"supsystic-io-block-cell\">";
                // line 385
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "title", array()), "html", null, true);
                echo "</div>
                    <div class=\"supsystic-io-block-cell\">
                        ";
                // line 387
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"supsystic-io-block-cell\">
                        ";
                // line 390
                if ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                    // line 391
                    echo "                            ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["gallInfo"], "optimized_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 393
                    echo "                            -
                        ";
                }
                // line 395
                echo "                    </div>
                    <div class=\"supsystic-io-block-cell\">
                        ";
                // line 397
                if ((($this->getAttribute($context["gallInfo"], "last_optimize_date", array(), "any", true, true) && $this->getAttribute($context["gallInfo"], "service_name", array(), "any", true, true)) && $this->getAttribute($context["gallInfo"], "optimize_percent", array(), "any", true, true))) {
                    // line 398
                    echo "                            ";
                    // line 399
                    echo "                            ";
                    echo twig_escape_filter($this->env, ((($this->getAttribute($context["gallInfo"], "last_optimize_date", array()) . " / ") . $this->getAttribute($context["gallInfo"], "optimize_percent", array())) . "% "), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 401
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
                    echo "
                        ";
                }
                // line 403
                echo "\t\t\t\t\t</div>
                    <div class=\"supsystic-io-block-cell\">
                        ";
                // line 405
                if ($this->getAttribute($context["gallInfo"], "last_optimize_date", array(), "any", true, true)) {
                    // line 406
                    echo "                            <button class=\"button sgg-restore-src-img\" data-gallery-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 407
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Restore Source Images")), "html", null, true);
                    echo "
                            </button>
                            <div class=\"sgg-opt-twi-button\">
                                <button class=\"button sgg-tbl-optimize-retr\"
                                        data-gallery-id=\"";
                    // line 411
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                    echo "\"
                                        data-gallery-total-size=\"";
                    // line 412
                    if ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "\"
                                        data-photo-count=\"";
                    // line 413
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                    echo "\">
                                    ";
                    // line 414
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize")), "html", null, true);
                    echo "
                                </button>
                                <br/><span class=\"sgg-more-info-str\">* one more time</span>
                            </div>
                        ";
                } else {
                    // line 419
                    echo "                            <button class=\"button sgg-restore-src-img sgg-io-tab-hidden\" data-gallery-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 420
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Restore Source Images")), "html", null, true);
                    echo "
                            </button>
                            <button class=\"button sgg-tbl-optimize-first\"
                                    data-gallery-id=\"";
                    // line 423
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "id", array()), "html", null, true);
                    echo "\"
                                    data-gallery-total-size=\"";
                    // line 424
                    if ($this->getAttribute($context["gallInfo"], "optimized_size", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "optimized_size", array()), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "\"
                                    data-photo-count=\"";
                    // line 425
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gallInfo"], "photo_count", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 426
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize Now")), "html", null, true);
                    echo "
                            </button>
                        ";
                }
                // line 429
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 432
            echo "        </div>
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

    // line 436
    public function getimageOptimizeServiceSettingsDialog($__ioSetting__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "ioSetting" => $__ioSetting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 437
            echo "    ";
            $context["helper1"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 437);
            // line 438
            echo "
    <div id=\"sggDialogSeviceSetting\" title=\"\" style=\"display:none;\">
        <div class=\"sgg-dialog-block-part sgg-io-tab-hidden\" data-img-opt-sett-code=\"tinypng\">
            <label>
                ";
            // line 442
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your TinyPNG API key")), "html", null, true);
            echo "
                ";
            // line 443
            echo $context["helper1"]->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your name and email address on this <a target='_blank' href='https://tinypng.com/developers'>page</a> to retrieve your API key. On your email will be sent a link to your API key. Follow the link from email and grab your API key.")), "top", true);
            echo "
                <br/>
                <input type=\"text\" class=\"sgg-tinypng-sett-auth-val\" name=\"tinypng-auth-val\" value=\"";
            // line 445
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ioSetting"]) ? $context["ioSetting"] : null), "setting", array(), "any", false, true), "tinypng", array(), "any", false, true), "auth_key", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ioSetting"]) ? $context["ioSetting"] : null), "setting", array()), "tinypng", array()), "auth_key", array()), "html", null, true);
            }
            echo "\"/>
            </label>
            <button class=\"button sgg-setup-button sgg-tinypng-save\" >";
            // line 447
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
            echo "</button>
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

    // line 452
    public function getcdnServiceSettingDialog($__cdnSett__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSett" => $__cdnSett__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 453
            echo "    ";
            $context["helper1"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 453);
            // line 454
            echo "
    <div id=\"sggCdnDialogSeviceSett\" title=\"\" style=\"display:none;\">
        <div class=\"sgg-dialog-block-part sgg-io-tab-hidden\" data-img-opt-sett-code=\"keycdn\">
            <label>
                ";
            // line 458
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your Site name")), "html", null, true);
            echo "
\t\t\t\t";
            // line 459
            echo $context["helper1"]->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn Zone name (for example: pz-6f09.kxcdn.com)")), "top", true);
            echo "
\t\t\t\t<br/>
                <input type=\"text\" autocomplete=\"off\" class=\"sgg-keycdn-sett-zonename\" name=\"sgg-keycdn-sett-sitename\" value=\"";
            // line 461
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSett"]) ? $context["cdnSett"] : null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "zone_name", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSett"]) ? $context["cdnSett"] : null), "setting", array()), "keycdn", array()), "zone_name", array()), "html", null, true);
            }
            echo "\"/>
            </label>
            <br/>
\t\t\t<label>
\t\t\t\t";
            // line 465
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your username")), "html", null, true);
            echo "
\t\t\t\t";
            // line 466
            echo $context["helper1"]->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn username")), "top", true);
            echo "
\t\t\t\t<br/>
\t\t\t\t<input type=\"text\" autocomplete=\"off\" class=\"sgg-keycdn-sett-uname\" name=\"sgg-keycdn-sett-uname\" value=\"";
            // line 468
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSett"]) ? $context["cdnSett"] : null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSett"]) ? $context["cdnSett"] : null), "setting", array()), "keycdn", array()), "u_name", array()), "html", null, true);
            }
            echo "\"/>
\t\t\t</label><br/>
\t\t\t<label>
\t\t\t\t";
            // line 471
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your password")), "html", null, true);
            echo "
\t\t\t\t";
            // line 472
            echo $context["helper1"]->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn password")), "top", true);
            echo "
\t\t\t\t<br/>
\t\t\t\t";
            // line 475
            echo "\t\t\t\t<input type=\"password\" autocomplete=\"off\" class=\"sgg-keycdn-sett-upass\" name=\"sgg-keycdn-sett-upass\" value=\"\"/>
\t\t\t</label><br/>
\t\t\t<label>
\t\t\t\t";
            // line 478
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your ftp base path")), "html", null, true);
            echo "
\t\t\t\t";
            // line 479
            echo $context["helper1"]->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn ftp base path (for example: /pz)")), "top", true);
            echo "
\t\t\t\t<br/>
\t\t\t\t<input type=\"text\" class=\"sgg-keycdn-sett-base-ftp\" name=\"sgg-keycdn-sett-base-ftp\" value=\"";
            // line 481
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSett"]) ? $context["cdnSett"] : null), "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "base_ftp_path", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["cdnSett"]) ? $context["cdnSett"] : null), "setting", array()), "keycdn", array()), "base_ftp_path", array()), "html", null, true);
            }
            echo "\"/>
\t\t\t</label>
\t\t\t<button class=\"button sgg-setup-button sgg-keycdn-save\" disabled=\"disabled\">";
            // line 483
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
            echo "</button>
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

    // line 488
    public function getoneImageOptimizeStatTable($__serviceCode__ = null, $__tblData__ = null, $__statistic__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "serviceCode" => $__serviceCode__,
            "tblData" => $__tblData__,
            "statistic" => $__statistic__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 489
            echo "    <div class=\"supsystic-io-block-table sgg-service-stat-info\">
        <div class=\"supsystic-io-block-caption\">
            <h4>
                ";
            // line 492
            if (((isset($context["serviceCode"]) ? $context["serviceCode"] : null) == "tinypng")) {
                // line 493
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG")), "html", null, true);
                echo "
                ";
            } else {
                // line 495
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Incorrect service Code")), "html", null, true);
                echo "
                ";
            }
            // line 497
            echo "            </h4>
        </div>

        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\"></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 502
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Last 24 hours")), "html", null, true);
            echo "</span></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 503
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Week")), "html", null, true);
            echo "</span></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 504
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Month")), "html", null, true);
            echo "</span></div>
        </div>
        ";
            // line 507
            echo "        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 508
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of images")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 509
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 1, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 510
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 2, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 511
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 3, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 514
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size before")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 515
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 1, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 516
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 2, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 517
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 3, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 520
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size after")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 521
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 1, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 522
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 2, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 523
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 3, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 526
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save in Mb")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 527
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 1, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 528
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 2, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 529
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 3, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 532
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save in %")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 533
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 1, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 534
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 2, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 535
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["statistic"]) ? $context["statistic"] : null), 3, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
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
        return "@optimization/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1402 => 535,  1398 => 534,  1394 => 533,  1390 => 532,  1384 => 529,  1380 => 528,  1376 => 527,  1372 => 526,  1366 => 523,  1362 => 522,  1358 => 521,  1354 => 520,  1348 => 517,  1344 => 516,  1340 => 515,  1336 => 514,  1330 => 511,  1326 => 510,  1322 => 509,  1318 => 508,  1315 => 507,  1310 => 504,  1306 => 503,  1302 => 502,  1295 => 497,  1289 => 495,  1283 => 493,  1281 => 492,  1276 => 489,  1262 => 488,  1243 => 483,  1236 => 481,  1231 => 479,  1227 => 478,  1222 => 475,  1217 => 472,  1213 => 471,  1205 => 468,  1200 => 466,  1196 => 465,  1187 => 461,  1182 => 459,  1178 => 458,  1172 => 454,  1169 => 453,  1157 => 452,  1138 => 447,  1131 => 445,  1126 => 443,  1122 => 442,  1116 => 438,  1113 => 437,  1101 => 436,  1084 => 432,  1076 => 429,  1070 => 426,  1066 => 425,  1058 => 424,  1054 => 423,  1048 => 420,  1043 => 419,  1035 => 414,  1031 => 413,  1023 => 412,  1019 => 411,  1012 => 407,  1007 => 406,  1005 => 405,  1001 => 403,  995 => 401,  989 => 399,  987 => 398,  985 => 397,  981 => 395,  977 => 393,  971 => 391,  969 => 390,  963 => 387,  958 => 385,  952 => 382,  944 => 381,  936 => 380,  932 => 379,  928 => 377,  924 => 376,  918 => 373,  914 => 372,  910 => 371,  906 => 370,  899 => 366,  892 => 361,  886 => 357,  873 => 347,  870 => 346,  855 => 345,  838 => 341,  836 => 340,  834 => 339,  832 => 338,  830 => 337,  828 => 336,  826 => 335,  824 => 334,  822 => 333,  820 => 332,  818 => 331,  816 => 330,  811 => 326,  805 => 324,  799 => 322,  797 => 321,  792 => 319,  787 => 317,  780 => 315,  774 => 311,  761 => 310,  744 => 307,  735 => 301,  731 => 300,  720 => 292,  713 => 288,  704 => 282,  698 => 279,  693 => 277,  687 => 274,  682 => 272,  676 => 269,  668 => 264,  662 => 261,  658 => 260,  653 => 258,  646 => 254,  641 => 252,  635 => 249,  630 => 247,  625 => 245,  619 => 242,  613 => 239,  606 => 235,  599 => 231,  591 => 226,  586 => 224,  577 => 218,  573 => 216,  571 => 215,  569 => 214,  567 => 213,  565 => 212,  563 => 211,  561 => 210,  559 => 209,  557 => 208,  555 => 207,  550 => 204,  546 => 203,  531 => 192,  518 => 191,  497 => 184,  491 => 181,  484 => 177,  479 => 175,  472 => 171,  467 => 169,  460 => 165,  455 => 163,  450 => 161,  441 => 156,  439 => 155,  437 => 154,  435 => 153,  433 => 152,  431 => 151,  426 => 148,  422 => 147,  415 => 143,  409 => 140,  405 => 139,  395 => 131,  393 => 130,  381 => 129,  364 => 125,  353 => 120,  342 => 119,  337 => 118,  331 => 117,  327 => 116,  323 => 114,  320 => 113,  314 => 112,  312 => 111,  308 => 109,  305 => 108,  299 => 107,  297 => 106,  292 => 105,  290 => 104,  284 => 101,  279 => 99,  272 => 97,  261 => 96,  254 => 93,  250 => 92,  247 => 91,  244 => 90,  241 => 89,  238 => 88,  235 => 87,  232 => 86,  230 => 85,  223 => 81,  219 => 80,  215 => 79,  211 => 78,  203 => 73,  199 => 72,  191 => 66,  185 => 64,  179 => 62,  177 => 61,  172 => 59,  167 => 57,  160 => 55,  153 => 50,  140 => 49,  133 => 44,  128 => 42,  124 => 41,  119 => 40,  115 => 38,  106 => 36,  102 => 35,  98 => 34,  95 => 33,  93 => 32,  87 => 29,  83 => 28,  78 => 26,  74 => 24,  71 => 23,  68 => 22,  60 => 17,  53 => 13,  42 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@optimization/index.twig", "C:\\wamp64\\www\\verissimofotografia.com.br\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Optimization\\views\\index.twig");
    }
}
