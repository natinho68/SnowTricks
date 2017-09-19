<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_147e3ebcad520f6f131d65c175cb2a37cd5824a95f83d6a7afb44976604123ff extends Twig_Template
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
        $__internal_669ac9929a2497ac42534669aa66133a4c559008d1ec1d1fa75fe6f8e6e74de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669ac9929a2497ac42534669aa66133a4c559008d1ec1d1fa75fe6f8e6e74de1->enter($__internal_669ac9929a2497ac42534669aa66133a4c559008d1ec1d1fa75fe6f8e6e74de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_0c51d7758fb1f86b02a8ac5780a3078b02a453e976e85ac0fa81e223b8801095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c51d7758fb1f86b02a8ac5780a3078b02a453e976e85ac0fa81e223b8801095->enter($__internal_0c51d7758fb1f86b02a8ac5780a3078b02a453e976e85ac0fa81e223b8801095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_669ac9929a2497ac42534669aa66133a4c559008d1ec1d1fa75fe6f8e6e74de1->leave($__internal_669ac9929a2497ac42534669aa66133a4c559008d1ec1d1fa75fe6f8e6e74de1_prof);

        
        $__internal_0c51d7758fb1f86b02a8ac5780a3078b02a453e976e85ac0fa81e223b8801095->leave($__internal_0c51d7758fb1f86b02a8ac5780a3078b02a453e976e85ac0fa81e223b8801095_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
