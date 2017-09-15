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
        $__internal_281d87a5c72a6ba4346a5a9277f60c3c1bdeee1506f16aaa521ec083c5710b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281d87a5c72a6ba4346a5a9277f60c3c1bdeee1506f16aaa521ec083c5710b9a->enter($__internal_281d87a5c72a6ba4346a5a9277f60c3c1bdeee1506f16aaa521ec083c5710b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_78b1c0860f14074257e5ed66394269ed3007b411a78d9fc2a623385c4ab2fcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b1c0860f14074257e5ed66394269ed3007b411a78d9fc2a623385c4ab2fcd5->enter($__internal_78b1c0860f14074257e5ed66394269ed3007b411a78d9fc2a623385c4ab2fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281d87a5c72a6ba4346a5a9277f60c3c1bdeee1506f16aaa521ec083c5710b9a->leave($__internal_281d87a5c72a6ba4346a5a9277f60c3c1bdeee1506f16aaa521ec083c5710b9a_prof);

        
        $__internal_78b1c0860f14074257e5ed66394269ed3007b411a78d9fc2a623385c4ab2fcd5->leave($__internal_78b1c0860f14074257e5ed66394269ed3007b411a78d9fc2a623385c4ab2fcd5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_143a6b1b3cbfc8808dfb47b0416af63a096358bf1b917a482d50864b9bd98f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143a6b1b3cbfc8808dfb47b0416af63a096358bf1b917a482d50864b9bd98f0c->enter($__internal_143a6b1b3cbfc8808dfb47b0416af63a096358bf1b917a482d50864b9bd98f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1491679dd4b6baf7d30191ee91c38fb95ef5a98b2f2d2c617e4240a64f674d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1491679dd4b6baf7d30191ee91c38fb95ef5a98b2f2d2c617e4240a64f674d4d->enter($__internal_1491679dd4b6baf7d30191ee91c38fb95ef5a98b2f2d2c617e4240a64f674d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1491679dd4b6baf7d30191ee91c38fb95ef5a98b2f2d2c617e4240a64f674d4d->leave($__internal_1491679dd4b6baf7d30191ee91c38fb95ef5a98b2f2d2c617e4240a64f674d4d_prof);

        
        $__internal_143a6b1b3cbfc8808dfb47b0416af63a096358bf1b917a482d50864b9bd98f0c->leave($__internal_143a6b1b3cbfc8808dfb47b0416af63a096358bf1b917a482d50864b9bd98f0c_prof);

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
