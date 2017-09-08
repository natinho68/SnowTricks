<?php

/* AppBundle:pages:delete.html.twig */
class __TwigTemplate_16e1e5ff0a97361d967f6c9c74ed012216180e2e246d5cb015c94c2a89edc9a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:pages:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12aad1a7ca746c4528410a6ef8855733d0f90a05889f771e3d1e05a6af9d1554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12aad1a7ca746c4528410a6ef8855733d0f90a05889f771e3d1e05a6af9d1554->enter($__internal_12aad1a7ca746c4528410a6ef8855733d0f90a05889f771e3d1e05a6af9d1554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:delete.html.twig"));

        $__internal_4e588c34ebedd0de28e8add67c32ad2340ed502bff961de47c4241cc18b301bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e588c34ebedd0de28e8add67c32ad2340ed502bff961de47c4241cc18b301bd->enter($__internal_4e588c34ebedd0de28e8add67c32ad2340ed502bff961de47c4241cc18b301bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12aad1a7ca746c4528410a6ef8855733d0f90a05889f771e3d1e05a6af9d1554->leave($__internal_12aad1a7ca746c4528410a6ef8855733d0f90a05889f771e3d1e05a6af9d1554_prof);

        
        $__internal_4e588c34ebedd0de28e8add67c32ad2340ed502bff961de47c4241cc18b301bd->leave($__internal_4e588c34ebedd0de28e8add67c32ad2340ed502bff961de47c4241cc18b301bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca9f78b692cfff66b599ed1abd4ac9700ed5780b0d54dc9fe25bd6851af319fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9f78b692cfff66b599ed1abd4ac9700ed5780b0d54dc9fe25bd6851af319fe->enter($__internal_ca9f78b692cfff66b599ed1abd4ac9700ed5780b0d54dc9fe25bd6851af319fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6a260c9256c124f3f8c91b7ec3930d1f736a37ab54f97cd17d6544bd87f0886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a260c9256c124f3f8c91b7ec3930d1f736a37ab54f97cd17d6544bd87f0886->enter($__internal_c6a260c9256c124f3f8c91b7ec3930d1f736a37ab54f97cd17d6544bd87f0886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Delete a trick - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c6a260c9256c124f3f8c91b7ec3930d1f736a37ab54f97cd17d6544bd87f0886->leave($__internal_c6a260c9256c124f3f8c91b7ec3930d1f736a37ab54f97cd17d6544bd87f0886_prof);

        
        $__internal_ca9f78b692cfff66b599ed1abd4ac9700ed5780b0d54dc9fe25bd6851af319fe->leave($__internal_ca9f78b692cfff66b599ed1abd4ac9700ed5780b0d54dc9fe25bd6851af319fe_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_07f60050f49b7080d4f784b4a57a3fff9ab9f57b9a0d2c6c56884b6f768816e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f60050f49b7080d4f784b4a57a3fff9ab9f57b9a0d2c6c56884b6f768816e3->enter($__internal_07f60050f49b7080d4f784b4a57a3fff9ab9f57b9a0d2c6c56884b6f768816e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d652a2e9ad70e177b77fcf17cd9e395d18eb65f3d191fc1d2a1002a2b2b6528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d652a2e9ad70e177b77fcf17cd9e395d18eb65f3d191fc1d2a1002a2b2b6528->enter($__internal_0d652a2e9ad70e177b77fcf17cd9e395d18eb65f3d191fc1d2a1002a2b2b6528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Delete a trick</h3>

    <p>
        Are you sure you want to delete the trick :  \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "name", array()), "html", null, true);
        echo "\" ?
    </p>


    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "slug", array()))), "html", null, true);
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
                Back to the trick
            </a>
        ";
        // line 20
        echo "        <input type=\"submit\" value=\"Delete\" class=\"waves-effect black btn\" />
        ";
        // line 22
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_0d652a2e9ad70e177b77fcf17cd9e395d18eb65f3d191fc1d2a1002a2b2b6528->leave($__internal_0d652a2e9ad70e177b77fcf17cd9e395d18eb65f3d191fc1d2a1002a2b2b6528_prof);

        
        $__internal_07f60050f49b7080d4f784b4a57a3fff9ab9f57b9a0d2c6c56884b6f768816e3->leave($__internal_07f60050f49b7080d4f784b4a57a3fff9ab9f57b9a0d2c6c56884b6f768816e3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  94 => 20,  88 => 16,  84 => 15,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    Delete a trick - {{ parent() }}
{% endblock %}

{% block body %}
    <h3>Delete a trick</h3>

    <p>
        Are you sure you want to delete the trick :  \"{{ trick.name }}\" ?
    </p>


    <form action=\"{{ path('delete', {'id': trick.id}) }}\" method=\"post\">
            <a href=\"{{ path('view', {'slug': trick.slug}) }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
                Back to the trick
            </a>
        {# Ici j'ai écrit le bouton de soumission à la main #}
        <input type=\"submit\" value=\"Delete\" class=\"waves-effect black btn\" />
        {# Ceci va générer le champ CSRF #}
        {{ form_rest(form) }}
    </form>
{% endblock %}
", "AppBundle:pages:delete.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/delete.html.twig");
    }
}
