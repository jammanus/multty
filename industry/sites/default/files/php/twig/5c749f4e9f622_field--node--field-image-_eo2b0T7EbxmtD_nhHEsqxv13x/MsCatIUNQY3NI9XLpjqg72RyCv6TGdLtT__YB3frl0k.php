<?php

/* themes/custom/topplus/templates/field--node--field-image--mt_service.html.twig */
class __TwigTemplate_b69cc4f4343b36166ee39064d2513a2949e57a6f526463614363f093c09849e3 extends Twig_Template
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
        $tags = array("set" => 41, "if" => 54, "for" => 73);
        $filters = array("clean_class" => 43, "length" => 57);
        $functions = array("attach_library" => 55);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'length'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 41
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 44
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 45
($context["label_display"] ?? null)));
        // line 49
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 51
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 54
        if ((($context["view_mode"] ?? null) == "full")) {
            // line 55
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/magnific-popup-field-image-slider-init"), "html", null, true));
            echo "
";
        }
        // line 57
        if (((twig_length_filter($this->env, ($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
            // line 58
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/flexslider-in-page-init"), "html", null, true));
            echo "
";
        }
        // line 60
        if (($context["label_hidden"] ?? null)) {
            // line 61
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 62
                echo "    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__items"), "method"), "html", null, true));
                echo ">
      <div class=\"images-container clearfix\">
        ";
                // line 64
                if (((twig_length_filter($this->env, ($context["items"] ?? null)) <= 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 65
                    echo "          <div class=\"image-preview one-value clearfix\">
            <div";
                    // line 66
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                    echo ">
              ";
                    // line 67
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "html", null, true));
                    echo "
            </div>
          </div>
        ";
                } elseif (((twig_length_filter($this->env,                 // line 70
($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 71
                    echo "          <div id=\"in-page-images-slider\" class=\"in-page-images-slider flexslider\">
            <ul class=\"slides\">
              ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 74
                        echo "                <li>
                  ";
                        // line 75
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                        echo "
                </li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "            </ul>
          </div>
          <div id=\"in-page-images-carousel\" class=\"in-page-images-carousel flexslider\">
            <ul class=\"slides\">
              ";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 83
                        echo "                <li>
                  ";
                        // line 84
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                        echo "
                </li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "            </ul>
          </div>
        ";
                } else {
                    // line 90
                    echo "          <div class=\"image-preview clearfix\">
            <div";
                    // line 91
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                    echo ">
              ";
                    // line 92
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "html", null, true));
                    echo "
            </div>
          </div>
        ";
                }
                // line 96
                echo "      </div>
    </div>
  ";
            } else {
                // line 99
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 100
                    echo "      <div class=\"images-container clearfix one-value\">
        <div class=\"image-preview clearfix\">
          <div";
                    // line 102
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__item"), "method"), "html", null, true));
                    echo ">
            ";
                    // line 103
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "
          </div>
        </div>
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "  ";
            }
        } else {
            // line 110
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    <div";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</div>
    ";
            // line 112
            if (($context["multiple"] ?? null)) {
                // line 113
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__items"), "method"), "html", null, true));
                echo ">
        <div class=\"images-container clearfix\">
          ";
                // line 115
                if (((twig_length_filter($this->env, ($context["items"] ?? null)) <= 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 116
                    echo "            <div class=\"image-preview one-value clearfix\">
              <div";
                    // line 117
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                    echo ">
                ";
                    // line 118
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "html", null, true));
                    echo "
              </div>
            </div>
          ";
                } elseif (((twig_length_filter($this->env,                 // line 121
($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 122
                    echo "            <div id=\"in-page-images-slider\" class=\"in-page-images-slider flexslider\">
              <ul class=\"slides\">
                ";
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 125
                        echo "                  <li>
                    ";
                        // line 126
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                        echo "
                  </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "              </ul>
            </div>
            <div id=\"in-page-images-carousel\" class=\"in-page-images-carousel flexslider\">
              <ul class=\"slides\">
                ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 134
                        echo "                  <li>
                    ";
                        // line 135
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                        echo "
                  </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "              </ul>
            </div>
          ";
                } else {
                    // line 141
                    echo "            <div class=\"image-preview clearfix\">
              <div";
                    // line 142
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                    echo ">
                ";
                    // line 143
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "html", null, true));
                    echo "
              </div>
            </div>
          ";
                }
                // line 147
                echo "        </div>
      </div>
    ";
            } else {
                // line 150
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 151
                    echo "        <div class=\"images-container clearfix one-value\">
          <div class=\"image-preview clearfix\">
            <div";
                    // line 153
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__item"), "method"), "html", null, true));
                    echo ">
              ";
                    // line 154
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "
            </div>
          </div>
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "    ";
            }
            // line 160
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/topplus/templates/field--node--field-image--mt_service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 160,  315 => 159,  304 => 154,  300 => 153,  296 => 151,  291 => 150,  286 => 147,  279 => 143,  275 => 142,  272 => 141,  267 => 138,  258 => 135,  255 => 134,  251 => 133,  245 => 129,  236 => 126,  233 => 125,  229 => 124,  225 => 122,  223 => 121,  217 => 118,  213 => 117,  210 => 116,  208 => 115,  202 => 113,  200 => 112,  194 => 111,  189 => 110,  185 => 108,  174 => 103,  170 => 102,  166 => 100,  161 => 99,  156 => 96,  149 => 92,  145 => 91,  142 => 90,  137 => 87,  128 => 84,  125 => 83,  121 => 82,  115 => 78,  106 => 75,  103 => 74,  99 => 73,  95 => 71,  93 => 70,  87 => 67,  83 => 66,  80 => 65,  78 => 64,  72 => 62,  69 => 61,  67 => 60,  61 => 58,  59 => 57,  53 => 55,  51 => 54,  49 => 51,  48 => 49,  46 => 45,  45 => 44,  44 => 43,  43 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/topplus/templates/field--node--field-image--mt_service.html.twig", "/home/multty/www/drupal-8.5.3/industry/themes/custom/topplus/templates/field--node--field-image--mt_service.html.twig");
    }
}
