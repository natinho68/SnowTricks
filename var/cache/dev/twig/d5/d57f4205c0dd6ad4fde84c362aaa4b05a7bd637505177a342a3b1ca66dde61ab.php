<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3e6f5e750dbcc360b571427a623b93ca2a5f48b2ecbfc89d25c27ef43d770603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_ce48600a3295edf7be911fd5e0929768e23f557635ba979f440a9f012cc6baf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce48600a3295edf7be911fd5e0929768e23f557635ba979f440a9f012cc6baf5->enter($__internal_ce48600a3295edf7be911fd5e0929768e23f557635ba979f440a9f012cc6baf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_c31d4875b1c0fcd3fd70dce29570bd8f89f27c4a06d8d93710bd930cb946762c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31d4875b1c0fcd3fd70dce29570bd8f89f27c4a06d8d93710bd930cb946762c->enter($__internal_c31d4875b1c0fcd3fd70dce29570bd8f89f27c4a06d8d93710bd930cb946762c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce48600a3295edf7be911fd5e0929768e23f557635ba979f440a9f012cc6baf5->leave($__internal_ce48600a3295edf7be911fd5e0929768e23f557635ba979f440a9f012cc6baf5_prof);

        
        $__internal_c31d4875b1c0fcd3fd70dce29570bd8f89f27c4a06d8d93710bd930cb946762c->leave($__internal_c31d4875b1c0fcd3fd70dce29570bd8f89f27c4a06d8d93710bd930cb946762c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00f1c85da6235a355487b1b5e15a3cfa50ae1060be705870ef56599c021c13df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f1c85da6235a355487b1b5e15a3cfa50ae1060be705870ef56599c021c13df->enter($__internal_00f1c85da6235a355487b1b5e15a3cfa50ae1060be705870ef56599c021c13df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_75191324dbedb781a213a2cf2c7e00705bb98028703e500993375e2fe56d183a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75191324dbedb781a213a2cf2c7e00705bb98028703e500993375e2fe56d183a->enter($__internal_75191324dbedb781a213a2cf2c7e00705bb98028703e500993375e2fe56d183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_75191324dbedb781a213a2cf2c7e00705bb98028703e500993375e2fe56d183a->leave($__internal_75191324dbedb781a213a2cf2c7e00705bb98028703e500993375e2fe56d183a_prof);

        
        $__internal_00f1c85da6235a355487b1b5e15a3cfa50ae1060be705870ef56599c021c13df->leave($__internal_00f1c85da6235a355487b1b5e15a3cfa50ae1060be705870ef56599c021c13df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
