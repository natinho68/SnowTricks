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
        $__internal_9c85bbc151592e2bd73d4ab70b8474f1f37bd12c1de3e3bc4ee9e6ef9eede23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c85bbc151592e2bd73d4ab70b8474f1f37bd12c1de3e3bc4ee9e6ef9eede23f->enter($__internal_9c85bbc151592e2bd73d4ab70b8474f1f37bd12c1de3e3bc4ee9e6ef9eede23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_afa674c16fa4c329dbfe2f1c615822377600ec77a346d36a2ffa216e66881388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa674c16fa4c329dbfe2f1c615822377600ec77a346d36a2ffa216e66881388->enter($__internal_afa674c16fa4c329dbfe2f1c615822377600ec77a346d36a2ffa216e66881388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c85bbc151592e2bd73d4ab70b8474f1f37bd12c1de3e3bc4ee9e6ef9eede23f->leave($__internal_9c85bbc151592e2bd73d4ab70b8474f1f37bd12c1de3e3bc4ee9e6ef9eede23f_prof);

        
        $__internal_afa674c16fa4c329dbfe2f1c615822377600ec77a346d36a2ffa216e66881388->leave($__internal_afa674c16fa4c329dbfe2f1c615822377600ec77a346d36a2ffa216e66881388_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b08650aa9111da35400fd2d82a390d474b50786dd8eb692fbebe3e4c8511985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b08650aa9111da35400fd2d82a390d474b50786dd8eb692fbebe3e4c8511985->enter($__internal_1b08650aa9111da35400fd2d82a390d474b50786dd8eb692fbebe3e4c8511985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_380f89ab95d02b2ebc5f411331ed50aaa23994cfacf3569a717769fcd36884b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380f89ab95d02b2ebc5f411331ed50aaa23994cfacf3569a717769fcd36884b2->enter($__internal_380f89ab95d02b2ebc5f411331ed50aaa23994cfacf3569a717769fcd36884b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_380f89ab95d02b2ebc5f411331ed50aaa23994cfacf3569a717769fcd36884b2->leave($__internal_380f89ab95d02b2ebc5f411331ed50aaa23994cfacf3569a717769fcd36884b2_prof);

        
        $__internal_1b08650aa9111da35400fd2d82a390d474b50786dd8eb692fbebe3e4c8511985->leave($__internal_1b08650aa9111da35400fd2d82a390d474b50786dd8eb692fbebe3e4c8511985_prof);

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
