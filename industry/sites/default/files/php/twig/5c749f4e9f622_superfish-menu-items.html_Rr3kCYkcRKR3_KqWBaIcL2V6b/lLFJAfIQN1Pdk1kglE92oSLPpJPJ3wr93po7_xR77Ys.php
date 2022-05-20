<?php

/* modules/superfish/templates/superfish-menu-items.html.twig */
class __TwigTemplate_92b41b7569067fd63b0e24cea0dec8ddeaf40e8bacdf8af12c6147f0312ed762 extends Twig_Template
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
        $tags = array("set" => 22, "spaceless" => 23, "for" => 24, "if" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'spaceless', 'for', 'if'),
                array(),
                array()
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

        // line 21
        echo "
";
        // line 22
        $context["classes"] = array();
        // line 23
        ob_start();
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "
  ";
            // line 26
            if ( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) {
                // line 27
                echo "    ";
                $context["item_class"] = ($this->getAttribute($context["item"], "item_class", array()) . " menuparent");
                // line 28
                echo "    ";
                if ($this->getAttribute($context["item"], "multicolumn_column", array())) {
                    // line 29
                    echo "      ";
                    $context["item_class"] = (($context["item_class"] ?? null) . " sf-multicolumn-column");
                    // line 30
                    echo "    ";
                }
                // line 31
                echo "  ";
            }
            // line 32
            echo "
  <li";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 34
            if ($this->getAttribute($context["item"], "multicolumn_column", array())) {
                // line 35
                echo "    <div class=\"sf-multicolumn-column\">
    ";
            }
            // line 37
            echo "    ";
            if ( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) {
                // line 38
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_menuparent", array()), "html", null, true));
                echo "
    ";
            } else {
                // line 40
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
                echo "
    ";
            }
            // line 42
            echo "    ";
            if ($this->getAttribute($context["item"], "multicolumn_wrapper", array())) {
                echo "<ul class=\"sf-multicolumn\">
    <li class=\"sf-multicolumn-wrapper ";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "item_class", array()), "html", null, true));
                echo "\">
    ";
            }
            // line 45
            echo "    ";
            if ( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) {
                // line 46
                echo "      ";
                if ($this->getAttribute($context["item"], "multicolumn_content", array())) {
                    echo "<ol>";
                } else {
                    echo "<ul>";
                }
                // line 47
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "children", array()), "html", null, true));
                echo "
      ";
                // line 48
                if ($this->getAttribute($context["item"], "multicolumn_content", array())) {
                    echo "</ol>";
                } else {
                    echo "</ul>";
                }
                // line 49
                echo "    ";
            }
            // line 50
            echo "    ";
            if ($this->getAttribute($context["item"], "multicolumn_wrapper", array())) {
                echo "</li></ul>";
            }
            // line 51
            echo "    ";
            if ($this->getAttribute($context["item"], "multicolumn_column", array())) {
                echo "</div>";
            }
            // line 52
            echo "  </li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/superfish/templates/superfish-menu-items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  141 => 51,  136 => 50,  133 => 49,  127 => 48,  122 => 47,  115 => 46,  112 => 45,  107 => 43,  102 => 42,  96 => 40,  90 => 38,  87 => 37,  83 => 35,  81 => 34,  77 => 33,  74 => 32,  71 => 31,  68 => 30,  65 => 29,  62 => 28,  59 => 27,  57 => 26,  54 => 25,  50 => 24,  48 => 23,  46 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/superfish/templates/superfish-menu-items.html.twig", "/home/multty/www/drupal-8.5.3/industry/modules/superfish/templates/superfish-menu-items.html.twig");
    }
}
