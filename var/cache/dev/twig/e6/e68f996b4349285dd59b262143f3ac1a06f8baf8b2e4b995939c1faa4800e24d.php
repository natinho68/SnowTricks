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
        $__internal_5a8a5a389ce5a3d61c81f11b5d26fd71561b7b60bf2c57b8fa6430425fed47e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8a5a389ce5a3d61c81f11b5d26fd71561b7b60bf2c57b8fa6430425fed47e5->enter($__internal_5a8a5a389ce5a3d61c81f11b5d26fd71561b7b60bf2c57b8fa6430425fed47e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_47fec1910d2e923795f4a87ba4cbece2a7e5103c86ba11ae1a686dd26e14cbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fec1910d2e923795f4a87ba4cbece2a7e5103c86ba11ae1a686dd26e14cbe5->enter($__internal_47fec1910d2e923795f4a87ba4cbece2a7e5103c86ba11ae1a686dd26e14cbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_5a8a5a389ce5a3d61c81f11b5d26fd71561b7b60bf2c57b8fa6430425fed47e5->leave($__internal_5a8a5a389ce5a3d61c81f11b5d26fd71561b7b60bf2c57b8fa6430425fed47e5_prof);

        
        $__internal_47fec1910d2e923795f4a87ba4cbece2a7e5103c86ba11ae1a686dd26e14cbe5->leave($__internal_47fec1910d2e923795f4a87ba4cbece2a7e5103c86ba11ae1a686dd26e14cbe5_prof);

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
