<?php

/* modules/better_exposed_filters/templates/bef-checkboxes.html.twig */
class __TwigTemplate_38db8726e6f50ce24d3c17b99bd4f1b4eda41a3e73611e098189d6b8854a6510 extends Twig_Template
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
        $tags = array("set" => 13, "for" => 22, "if" => 24, "include" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if', 'include'),
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

        // line 13
        $context["classes"] = array(0 => "form-checkboxes", 1 => ((        // line 15
($context["isNested"] ?? null)) ? ("bef-nested") : ("")), 2 => ((        // line 16
($context["hasSelectAllNone"] ?? null)) ? ("bef-select-all-none") : ("")), 3 => ((        // line 17
($context["hasSelectAllNoneNested"] ?? null)) ? ("bef-select-all-none-nested") : ("")));
        // line 20
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 21
        $context["current_nesting_level"] = 0;
        // line 22
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "    ";
            $context["item"] = $this->getAttribute(($context["element"] ?? null), $context["child"]);
            // line 24
            echo "    ";
            if (($context["isNested"] ?? null)) {
                // line 25
                echo "      ";
                $context["new_nesting_level"] = $this->getAttribute(($context["depth"] ?? null), $context["child"]);
                // line 26
                echo "      ";
                $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/better_exposed_filters/templates/bef-checkboxes.html.twig", 26)->display($context);
                // line 27
                echo "      ";
                $context["current_nesting_level"] = ($context["new_nesting_level"] ?? null);
                // line 28
                echo "    ";
            } else {
                // line 29
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["item"] ?? null), "html", null, true));
                echo "
    ";
            }
            // line 31
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/better_exposed_filters/templates/bef-checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  97 => 31,  91 => 29,  88 => 28,  85 => 27,  82 => 26,  79 => 25,  76 => 24,  73 => 23,  55 => 22,  53 => 21,  48 => 20,  46 => 17,  45 => 16,  44 => 15,  43 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/better_exposed_filters/templates/bef-checkboxes.html.twig", "/home/multty/www/drupal-8.5.3/industry/modules/better_exposed_filters/templates/bef-checkboxes.html.twig");
    }
}
