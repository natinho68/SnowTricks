<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_59ac452d7b6fe043af2e999a7a4a1daae2629df18965a14e2fd59f3dd44a6d76 extends Twig_Template
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
        $__internal_1fa2931f08b7424c39a8d8f1529135c4ad4b66332e053cba23e21a555a756bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa2931f08b7424c39a8d8f1529135c4ad4b66332e053cba23e21a555a756bac->enter($__internal_1fa2931f08b7424c39a8d8f1529135c4ad4b66332e053cba23e21a555a756bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_4b7f6538319e62c3d7cfa08f4a841b7988804c57d522e608ac2e62a07d4782b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7f6538319e62c3d7cfa08f4a841b7988804c57d522e608ac2e62a07d4782b1->enter($__internal_4b7f6538319e62c3d7cfa08f4a841b7988804c57d522e608ac2e62a07d4782b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1fa2931f08b7424c39a8d8f1529135c4ad4b66332e053cba23e21a555a756bac->leave($__internal_1fa2931f08b7424c39a8d8f1529135c4ad4b66332e053cba23e21a555a756bac_prof);

        
        $__internal_4b7f6538319e62c3d7cfa08f4a841b7988804c57d522e608ac2e62a07d4782b1->leave($__internal_4b7f6538319e62c3d7cfa08f4a841b7988804c57d522e608ac2e62a07d4782b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
