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
        $__internal_d2b5907b93588a6cee3636aa3a5b35a68f1a7e7007ef3b1cd7b9a16f2c0163fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b5907b93588a6cee3636aa3a5b35a68f1a7e7007ef3b1cd7b9a16f2c0163fa->enter($__internal_d2b5907b93588a6cee3636aa3a5b35a68f1a7e7007ef3b1cd7b9a16f2c0163fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_13605e765f50ee86ea74e0d614d2c59d691e129e1a3e4c1f39fbcb553fc3c39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13605e765f50ee86ea74e0d614d2c59d691e129e1a3e4c1f39fbcb553fc3c39d->enter($__internal_13605e765f50ee86ea74e0d614d2c59d691e129e1a3e4c1f39fbcb553fc3c39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b5907b93588a6cee3636aa3a5b35a68f1a7e7007ef3b1cd7b9a16f2c0163fa->leave($__internal_d2b5907b93588a6cee3636aa3a5b35a68f1a7e7007ef3b1cd7b9a16f2c0163fa_prof);

        
        $__internal_13605e765f50ee86ea74e0d614d2c59d691e129e1a3e4c1f39fbcb553fc3c39d->leave($__internal_13605e765f50ee86ea74e0d614d2c59d691e129e1a3e4c1f39fbcb553fc3c39d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0fb386ffc567392b779b1269c59ff51b1d86ac4087d152e2ba56c7ad88fb619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fb386ffc567392b779b1269c59ff51b1d86ac4087d152e2ba56c7ad88fb619->enter($__internal_f0fb386ffc567392b779b1269c59ff51b1d86ac4087d152e2ba56c7ad88fb619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fde9864005a64bf11d05ac930ae324350edb05c0703b80436e6f567ae15b714a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde9864005a64bf11d05ac930ae324350edb05c0703b80436e6f567ae15b714a->enter($__internal_fde9864005a64bf11d05ac930ae324350edb05c0703b80436e6f567ae15b714a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_fde9864005a64bf11d05ac930ae324350edb05c0703b80436e6f567ae15b714a->leave($__internal_fde9864005a64bf11d05ac930ae324350edb05c0703b80436e6f567ae15b714a_prof);

        
        $__internal_f0fb386ffc567392b779b1269c59ff51b1d86ac4087d152e2ba56c7ad88fb619->leave($__internal_f0fb386ffc567392b779b1269c59ff51b1d86ac4087d152e2ba56c7ad88fb619_prof);

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
