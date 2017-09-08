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
        $__internal_4e7000857bcf04fd5adbe39f66be36e5b6238f17848ca6493b1e38dd532b6ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7000857bcf04fd5adbe39f66be36e5b6238f17848ca6493b1e38dd532b6ce3->enter($__internal_4e7000857bcf04fd5adbe39f66be36e5b6238f17848ca6493b1e38dd532b6ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_571341ecbe2a3742b5f4a7a813add59c0d44dfc4ef4304fcb971a2a850f3f873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571341ecbe2a3742b5f4a7a813add59c0d44dfc4ef4304fcb971a2a850f3f873->enter($__internal_571341ecbe2a3742b5f4a7a813add59c0d44dfc4ef4304fcb971a2a850f3f873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7000857bcf04fd5adbe39f66be36e5b6238f17848ca6493b1e38dd532b6ce3->leave($__internal_4e7000857bcf04fd5adbe39f66be36e5b6238f17848ca6493b1e38dd532b6ce3_prof);

        
        $__internal_571341ecbe2a3742b5f4a7a813add59c0d44dfc4ef4304fcb971a2a850f3f873->leave($__internal_571341ecbe2a3742b5f4a7a813add59c0d44dfc4ef4304fcb971a2a850f3f873_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e60d4d6769f7b36464f043d373d3ec6bf642b7351ca6f602a6cd110a29b460d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e60d4d6769f7b36464f043d373d3ec6bf642b7351ca6f602a6cd110a29b460d->enter($__internal_5e60d4d6769f7b36464f043d373d3ec6bf642b7351ca6f602a6cd110a29b460d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_857472016f11190742bd33a78efcc5b646a081997bf66b77e026aa0b8191d4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857472016f11190742bd33a78efcc5b646a081997bf66b77e026aa0b8191d4fb->enter($__internal_857472016f11190742bd33a78efcc5b646a081997bf66b77e026aa0b8191d4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_857472016f11190742bd33a78efcc5b646a081997bf66b77e026aa0b8191d4fb->leave($__internal_857472016f11190742bd33a78efcc5b646a081997bf66b77e026aa0b8191d4fb_prof);

        
        $__internal_5e60d4d6769f7b36464f043d373d3ec6bf642b7351ca6f602a6cd110a29b460d->leave($__internal_5e60d4d6769f7b36464f043d373d3ec6bf642b7351ca6f602a6cd110a29b460d_prof);

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
