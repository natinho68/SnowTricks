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
        $__internal_1dbf4e4dc247f512ebc265441991d321d6a1d99432b3fc227688ba1cf0fdcbdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbf4e4dc247f512ebc265441991d321d6a1d99432b3fc227688ba1cf0fdcbdd->enter($__internal_1dbf4e4dc247f512ebc265441991d321d6a1d99432b3fc227688ba1cf0fdcbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_646f43e422a19ebdb42191a1cc0a7b6df1fdd6fde1a136483d1c4d70a8e5422a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646f43e422a19ebdb42191a1cc0a7b6df1fdd6fde1a136483d1c4d70a8e5422a->enter($__internal_646f43e422a19ebdb42191a1cc0a7b6df1fdd6fde1a136483d1c4d70a8e5422a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dbf4e4dc247f512ebc265441991d321d6a1d99432b3fc227688ba1cf0fdcbdd->leave($__internal_1dbf4e4dc247f512ebc265441991d321d6a1d99432b3fc227688ba1cf0fdcbdd_prof);

        
        $__internal_646f43e422a19ebdb42191a1cc0a7b6df1fdd6fde1a136483d1c4d70a8e5422a->leave($__internal_646f43e422a19ebdb42191a1cc0a7b6df1fdd6fde1a136483d1c4d70a8e5422a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2dadd6603fbbdf8e2e81b1a17d91051f777dc5b0988bb84ff8385eeb4a538d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dadd6603fbbdf8e2e81b1a17d91051f777dc5b0988bb84ff8385eeb4a538d43->enter($__internal_2dadd6603fbbdf8e2e81b1a17d91051f777dc5b0988bb84ff8385eeb4a538d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e705fd9641b9f04f9dee2ddeb5c571c5519d1a939e01dac875336dc23c1ae51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e705fd9641b9f04f9dee2ddeb5c571c5519d1a939e01dac875336dc23c1ae51->enter($__internal_4e705fd9641b9f04f9dee2ddeb5c571c5519d1a939e01dac875336dc23c1ae51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4e705fd9641b9f04f9dee2ddeb5c571c5519d1a939e01dac875336dc23c1ae51->leave($__internal_4e705fd9641b9f04f9dee2ddeb5c571c5519d1a939e01dac875336dc23c1ae51_prof);

        
        $__internal_2dadd6603fbbdf8e2e81b1a17d91051f777dc5b0988bb84ff8385eeb4a538d43->leave($__internal_2dadd6603fbbdf8e2e81b1a17d91051f777dc5b0988bb84ff8385eeb4a538d43_prof);

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
