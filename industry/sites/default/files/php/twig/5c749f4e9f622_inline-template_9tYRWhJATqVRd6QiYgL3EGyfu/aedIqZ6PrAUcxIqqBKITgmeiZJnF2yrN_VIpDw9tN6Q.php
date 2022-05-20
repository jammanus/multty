<?php

/* {# inline_template_start #}<div class="views-field-field-image">
<div class="overlay-container">
<div class="overlay">
<a class="overlay-target-link" href="{{ path }}"></a>
<div class="overlay-inner">
<div class="views-field-title"><h5>{{ title }}</h5></div>
<div class="views-field-field-mt-subtitle">{{ field_mt_subtitle }}</div>
<div class="views-field-body">{{ body }}</div>
<ul class="icons-list icons-list--bordered">
{{ field_mt_twitter_account }}
{{ field_mt_facebook_account }}
{{ field_mt_linkedin_account }}
</ul>
</div>
</div>
{{ field_mt_member_photo }}
</div>
</div> */
class __TwigTemplate_7573ba9de2a7a6871591e55b8b345b57a09fe44ea3c929811568082657ba732b extends Twig_Template
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
<div class=\"overlay\">
<a class=\"overlay-target-link\" href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"></a>
<div class=\"overlay-inner\">
<div class=\"views-field-title\"><h5>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h5></div>
<div class=\"views-field-field-mt-subtitle\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_subtitle"] ?? null), "html", null, true));
        echo "</div>
<div class=\"views-field-body\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</div>
<ul class=\"icons-list icons-list--bordered\">
";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_twitter_account"] ?? null), "html", null, true));
        echo "
";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_facebook_account"] ?? null), "html", null, true));
        echo "
";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_linkedin_account"] ?? null), "html", null, true));
        echo "
</ul>
</div>
</div>
";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_member_photo"] ?? null), "html", null, true));
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"views-field-field-image\">
<div class=\"overlay-container\">
<div class=\"overlay\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<div class=\"overlay-inner\">
<div class=\"views-field-title\"><h5>{{ title }}</h5></div>
<div class=\"views-field-field-mt-subtitle\">{{ field_mt_subtitle }}</div>
<div class=\"views-field-body\">{{ body }}</div>
<ul class=\"icons-list icons-list--bordered\">
{{ field_mt_twitter_account }}
{{ field_mt_facebook_account }}
{{ field_mt_linkedin_account }}
</ul>
</div>
</div>
{{ field_mt_member_photo }}
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  91 => 12,  87 => 11,  83 => 10,  78 => 8,  74 => 7,  70 => 6,  65 => 4,  60 => 1,);
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
<div class=\"overlay\">
<a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
<div class=\"overlay-inner\">
<div class=\"views-field-title\"><h5>{{ title }}</h5></div>
<div class=\"views-field-field-mt-subtitle\">{{ field_mt_subtitle }}</div>
<div class=\"views-field-body\">{{ body }}</div>
<ul class=\"icons-list icons-list--bordered\">
{{ field_mt_twitter_account }}
{{ field_mt_facebook_account }}
{{ field_mt_linkedin_account }}
</ul>
</div>
</div>
{{ field_mt_member_photo }}
</div>
</div>", "");
    }
}
