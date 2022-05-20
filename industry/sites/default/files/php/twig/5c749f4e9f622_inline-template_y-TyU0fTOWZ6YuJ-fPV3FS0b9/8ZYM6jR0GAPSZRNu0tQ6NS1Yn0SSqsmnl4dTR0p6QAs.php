<?php

/* {# inline_template_start #}<div class="col-md-6">
<div class="views-field-body">{{ body }}</div>
<div class="views-field-title">{{ title }}</div>
<div class="views-field-field-subtitle">{{ field_mt_subtitle }}</div>
</div>
<div class="col-md-6">
<div class="overlay-container">
<span class="overlay overlay--colored">
<a class="overlay-target-link" href="{{ path }}"></a>
</span>
{{ field_mt_testimonial_image }}
</div>
</div>
 */
class __TwigTemplate_69d335f0771b067350338c808d31c5bc65340156b0193ccd8133a6c5a39270f2 extends Twig_Template
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
        echo "<div class=\"col-md-6\">
<div class=\"views-field-body\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</div>
<div class=\"views-field-title\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</div>
<div class=\"views-field-field-subtitle\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_subtitle"] ?? null), "html", null, true));
        echo "</div>
</div>
<div class=\"col-md-6\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"></a>
</span>
";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_testimonial_image"] ?? null), "html", null, true));
        echo "
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-md-6\">
<div class=\"views-field-body\">{{ body }}</div>
<div class=\"views-field-title\">{{ title }}</div>
<div class=\"views-field-field-subtitle\">{{ field_mt_subtitle }}</div>
</div>
<div class=\"col-md-6\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
</span>
{{ field_mt_testimonial_image }}
</div>
</div>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  75 => 9,  67 => 4,  63 => 3,  59 => 2,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"col-md-6\">
<div class=\"views-field-body\">{{ body }}</div>
<div class=\"views-field-title\">{{ title }}</div>
<div class=\"views-field-field-subtitle\">{{ field_mt_subtitle }}</div>
</div>
<div class=\"col-md-6\">
<div class=\"overlay-container\">
<span class=\"overlay overlay--colored\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
</span>
{{ field_mt_testimonial_image }}
</div>
</div>
", "");
    }
}
