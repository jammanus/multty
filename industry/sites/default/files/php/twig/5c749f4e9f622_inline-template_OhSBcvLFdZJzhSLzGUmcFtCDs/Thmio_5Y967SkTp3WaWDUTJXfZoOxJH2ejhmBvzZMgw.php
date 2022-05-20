<?php

/* {# inline_template_start #}<div class="overlay-container">
  <span class="overlay overlay--colored">
    <a class="overlay-target-link" href="{{ path }}"></a>
    <span class="overlay-inner">
      <a class="button button--black overlay-animated overlay-fade-bottom" href="{{ path }}">Free Trial <i class="fa fa-angle-right"></i></a>
    </span>
  </span>
  {{ field_image }}
</div> */
class __TwigTemplate_0236cad2010e8ab0484972a7865e8708e0759bad54b3ab146bc8a59f0fd10631 extends Twig_Template
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
        echo "<div class=\"overlay-container\">
  <span class=\"overlay overlay--colored\">
    <a class=\"overlay-target-link\" href=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\"></a>
    <span class=\"overlay-inner\">
      <a class=\"button button--black overlay-animated overlay-fade-bottom\" href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">Free Trial <i class=\"fa fa-angle-right\"></i></a>
    </span>
  </span>
  ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"overlay-container\">
  <span class=\"overlay overlay--colored\">
    <a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
    <span class=\"overlay-inner\">
      <a class=\"button button--black overlay-animated overlay-fade-bottom\" href=\"{{ path }}\">Free Trial <i class=\"fa fa-angle-right\"></i></a>
    </span>
  </span>
  {{ field_image }}
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 5,  55 => 3,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"overlay-container\">
  <span class=\"overlay overlay--colored\">
    <a class=\"overlay-target-link\" href=\"{{ path }}\"></a>
    <span class=\"overlay-inner\">
      <a class=\"button button--black overlay-animated overlay-fade-bottom\" href=\"{{ path }}\">Free Trial <i class=\"fa fa-angle-right\"></i></a>
    </span>
  </span>
  {{ field_image }}
</div>", "");
    }
}
