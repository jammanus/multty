<?php

/* modules/paragraphs/templates/paragraphs-actions.html.twig */
class __TwigTemplate_fdc6c61ff770fe100d88a9e58218ba699d7d103fa1654c454ef16faa0965aa6d extends Twig_Template
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
        $tags = array("set" => 20, "if" => 21, "trans" => 23);
        $filters = array();
        $functions = array("render_var" => 20);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array(),
                array('render_var')
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

        // line 15
        echo "<div class=\"paragraphs-actions\">
  ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["actions"] ?? null), "html", null, true));
        echo "
  ";
        // line 20
        echo "  ";
        $context["dropdown_actions_output"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["dropdown_actions"] ?? null));
        // line 21
        echo "  ";
        if (($context["dropdown_actions_output"] ?? null)) {
            // line 22
            echo "    <div class=\"paragraphs-dropdown\">
      <button class=\"paragraphs-dropdown-toggle\"><span class=\"visually-hidden\">";
            // line 23
            echo t("Toggle Actions", array());
            echo "</span></button>
      <div class=\"paragraphs-dropdown-actions\">
        ";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["dropdown_actions_output"] ?? null), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/paragraphs/templates/paragraphs-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  64 => 25,  59 => 23,  56 => 22,  53 => 21,  50 => 20,  46 => 16,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/paragraphs/templates/paragraphs-actions.html.twig", "/home/multty/www/drupal-8.5.3/industry/modules/paragraphs/templates/paragraphs-actions.html.twig");
    }
}
