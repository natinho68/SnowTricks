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
        $__internal_d95c64887c320573abf26f7ee53e5156cb9cfd75c1a0f5d03349b16ff9927289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95c64887c320573abf26f7ee53e5156cb9cfd75c1a0f5d03349b16ff9927289->enter($__internal_d95c64887c320573abf26f7ee53e5156cb9cfd75c1a0f5d03349b16ff9927289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_cb664433fef52622fe3d5eb77bc332cb83a543bcb6e293510f524372e1892d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb664433fef52622fe3d5eb77bc332cb83a543bcb6e293510f524372e1892d50->enter($__internal_cb664433fef52622fe3d5eb77bc332cb83a543bcb6e293510f524372e1892d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95c64887c320573abf26f7ee53e5156cb9cfd75c1a0f5d03349b16ff9927289->leave($__internal_d95c64887c320573abf26f7ee53e5156cb9cfd75c1a0f5d03349b16ff9927289_prof);

        
        $__internal_cb664433fef52622fe3d5eb77bc332cb83a543bcb6e293510f524372e1892d50->leave($__internal_cb664433fef52622fe3d5eb77bc332cb83a543bcb6e293510f524372e1892d50_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8c275d27016b31db0f1b0d37e6366b5832032f3e5164a7dd93c088a2fc9c7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c275d27016b31db0f1b0d37e6366b5832032f3e5164a7dd93c088a2fc9c7ef->enter($__internal_c8c275d27016b31db0f1b0d37e6366b5832032f3e5164a7dd93c088a2fc9c7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a57919398006c44dd61790676a68814868b7fec2348db2bbe147aef813248cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57919398006c44dd61790676a68814868b7fec2348db2bbe147aef813248cba->enter($__internal_a57919398006c44dd61790676a68814868b7fec2348db2bbe147aef813248cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a57919398006c44dd61790676a68814868b7fec2348db2bbe147aef813248cba->leave($__internal_a57919398006c44dd61790676a68814868b7fec2348db2bbe147aef813248cba_prof);

        
        $__internal_c8c275d27016b31db0f1b0d37e6366b5832032f3e5164a7dd93c088a2fc9c7ef->leave($__internal_c8c275d27016b31db0f1b0d37e6366b5832032f3e5164a7dd93c088a2fc9c7ef_prof);

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
