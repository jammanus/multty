<?php

/* themes/custom/topplus/templates/views-view--mt_products_list.html.twig */
class __TwigTemplate_d3314819396dcab29f99af5c28d7d2eb7d53b5e0ae0d4c52478029c75abd4c7a extends Twig_Template
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
        $tags = array("set" => 35, "if" => 45, "trans" => 70);
        $filters = array("clean_class" => 37, "trim" => 64, "render" => 64);
        $functions = array("attach_library" => 33);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'trim', 'render'),
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

        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("topplus/detailed-pager"), "html", null, true));
        echo "
";
        // line 35
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 37
($context["id"] ?? null))), 2 => ("view-id-" .         // line 38
($context["id"] ?? null)), 3 => ("view-display-id-" .         // line 39
($context["display_id"] ?? null)), 4 => ((        // line 40
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
        // line 43
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 45
        if (($context["title"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 48
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "    <div class=\"view-header\">
      ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 54
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 55
            echo "    <div class=\"view-filters\">
      ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 59
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 60
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 64
        echo "  ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["pager"] ?? null)))) {
            // line 65
            echo "    <div class=\"clearfix\">
      <div class=\"detailed-pager detailed-pager--top clearfix\">
        <div class=\"row\">
          <div class=\"col-sm-2\">
            ";
            // line 69
            if (($context["rows"] ?? null)) {
                // line 70
                echo "              <div class=\"total-items\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rows"] ?? null), "0", array(), "array"), "#view", array(), "array"), "total_rows", array()), "html", null, true));
                echo " ";
                echo t("Items", array());
                echo "</div>
            ";
            }
            // line 72
            echo "          </div>
          <div class=\"col-sm-10\">
            ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 80
        echo "  ";
        if (($context["rows"] ?? null)) {
            // line 81
            echo "    <div class=\"view-content\">
      ";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        } elseif (        // line 84
($context["empty"] ?? null)) {
            // line 85
            echo "    <div class=\"view-empty\">
      ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 89
        echo "  ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["pager"] ?? null)))) {
            // line 90
            echo "    <div class=\"clearfix\">
      <div class=\"detailed-pager detailed-pager--bottom clearfix\">
        <div class=\"row\">
          <div class=\"col-sm-2\">
            ";
            // line 94
            if (($context["rows"] ?? null)) {
                // line 95
                echo "              <div class=\"total-items\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["rows"] ?? null), "0", array(), "array"), "#view", array(), "array"), "total_rows", array()), "html", null, true));
                echo " ";
                echo t("Items", array());
                echo "</div>
            ";
            }
            // line 97
            echo "          </div>
          <div class=\"col-sm-10\">
            ";
            // line 99
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 105
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 106
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 110
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 111
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 113
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 114
            echo "    <div class=\"view-footer\">
      ";
            // line 115
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 118
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 119
            echo "    <div class=\"feed-icons\">
      ";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 123
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/topplus/templates/views-view--mt_products_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 123,  235 => 120,  232 => 119,  229 => 118,  223 => 115,  220 => 114,  217 => 113,  211 => 111,  208 => 110,  202 => 107,  199 => 106,  196 => 105,  187 => 99,  183 => 97,  175 => 95,  173 => 94,  167 => 90,  164 => 89,  158 => 86,  155 => 85,  153 => 84,  148 => 82,  145 => 81,  142 => 80,  133 => 74,  129 => 72,  121 => 70,  119 => 69,  113 => 65,  110 => 64,  104 => 61,  101 => 60,  98 => 59,  92 => 56,  89 => 55,  86 => 54,  80 => 51,  77 => 50,  75 => 49,  70 => 48,  64 => 46,  62 => 45,  58 => 44,  53 => 43,  51 => 40,  50 => 39,  49 => 38,  48 => 37,  47 => 35,  43 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/topplus/templates/views-view--mt_products_list.html.twig", "/home/multty/www/drupal-8.5.3/industry/themes/custom/topplus/templates/views-view--mt_products_list.html.twig");
    }
}
