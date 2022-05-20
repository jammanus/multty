<?php

/* {# inline_template_start #}<div class="views-field-field-image">
<div class="overlay-container">
<span class="overlay overlay--colored">
<a class="overlay-target-link" href="{{ path }}"></a>
<span class="overlay-inner">
<a class="overlay-title overlay-animated overlay-fade-top" href="{{ path }}">{{ title }}</a>
<span class="overlay-subtitle overlay-animated overlay-fade-bottom">{{ field_mt_subtitle }}</span>
</span>
</span>
{{ field_mt_video }}
</div>
</div> */
class __TwigTemplate_c91a08a1ddd7cbd5ebb1000fa61d649f7cb5bf144940351f50dcead904369e20 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-title overlay-animated overlay-fade-top\" href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a>
<span class=\"overlay-subtitle overlay-animated overlay-fade-bottom\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_subtitle"] ?? null), "html", null, true));
        echo "</span>
</span>
</span>
";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_video"] ?? null), "html", null, true));
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-title overlay-animated overlay-fade-top\" href=\"{{ path }}\">{{ title }}</a>
<span class=\"overlay-subtitle overlay-animated overlay-fade-bottom\">{{ field_mt_subtitle }}</span>
</span>
</span>
{{ field_mt_video }}
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  70 => 7,  64 => 6,  59 => 4,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<span class=\"overlay-inner\">
<a class=\"overlay-title overlay-animated overlay-fade-top\" href=\"{{ path }}\">{{ title }}</a>
<span class=\"overlay-subtitle overlay-animated overlay-fade-bottom\">{{ field_mt_subtitle }}</span>
</span>
</span>
{{ field_mt_video }}
</div>
</div>", "");
    }
}
