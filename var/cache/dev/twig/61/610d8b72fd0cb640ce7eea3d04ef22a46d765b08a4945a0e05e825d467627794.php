<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_290ce38760978f0db598839df3e1d384f0eae48af636154b5c7d15e0899b8d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31e15f12ab36ecf89e33102a5840310338043c663ef73b1584735fe2aae7c2fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e15f12ab36ecf89e33102a5840310338043c663ef73b1584735fe2aae7c2fe->enter($__internal_31e15f12ab36ecf89e33102a5840310338043c663ef73b1584735fe2aae7c2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f0481810800ed219ce5ce479f85f84e27410f37ccab9520279dfaa9e1a0880d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0481810800ed219ce5ce479f85f84e27410f37ccab9520279dfaa9e1a0880d6->enter($__internal_f0481810800ed219ce5ce479f85f84e27410f37ccab9520279dfaa9e1a0880d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e15f12ab36ecf89e33102a5840310338043c663ef73b1584735fe2aae7c2fe->leave($__internal_31e15f12ab36ecf89e33102a5840310338043c663ef73b1584735fe2aae7c2fe_prof);

        
        $__internal_f0481810800ed219ce5ce479f85f84e27410f37ccab9520279dfaa9e1a0880d6->leave($__internal_f0481810800ed219ce5ce479f85f84e27410f37ccab9520279dfaa9e1a0880d6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_087ba2e646d0a586440ebbc89775d223483e5690803451e74472b8806f8035f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087ba2e646d0a586440ebbc89775d223483e5690803451e74472b8806f8035f6->enter($__internal_087ba2e646d0a586440ebbc89775d223483e5690803451e74472b8806f8035f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_565d307f651fc06cc53fb395a475bd63fc72dc435020667eb2b5363c71bd3581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565d307f651fc06cc53fb395a475bd63fc72dc435020667eb2b5363c71bd3581->enter($__internal_565d307f651fc06cc53fb395a475bd63fc72dc435020667eb2b5363c71bd3581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_565d307f651fc06cc53fb395a475bd63fc72dc435020667eb2b5363c71bd3581->leave($__internal_565d307f651fc06cc53fb395a475bd63fc72dc435020667eb2b5363c71bd3581_prof);

        
        $__internal_087ba2e646d0a586440ebbc89775d223483e5690803451e74472b8806f8035f6->leave($__internal_087ba2e646d0a586440ebbc89775d223483e5690803451e74472b8806f8035f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
