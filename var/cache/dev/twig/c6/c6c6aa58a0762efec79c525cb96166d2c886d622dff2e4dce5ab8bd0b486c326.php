<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9e0f41a45cb33dd4fadfb0adcc3070d66e6201b54a3829017196a88f1cad225f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_083e25b658f70e65e1f54c390d24b5eecaa87b5ca9122d9a65289bbd2e639c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083e25b658f70e65e1f54c390d24b5eecaa87b5ca9122d9a65289bbd2e639c1f->enter($__internal_083e25b658f70e65e1f54c390d24b5eecaa87b5ca9122d9a65289bbd2e639c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ed216e9e51c6201096a9a6baf98a4a69c263f35b8df40a4157561911d1d90b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed216e9e51c6201096a9a6baf98a4a69c263f35b8df40a4157561911d1d90b54->enter($__internal_ed216e9e51c6201096a9a6baf98a4a69c263f35b8df40a4157561911d1d90b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_083e25b658f70e65e1f54c390d24b5eecaa87b5ca9122d9a65289bbd2e639c1f->leave($__internal_083e25b658f70e65e1f54c390d24b5eecaa87b5ca9122d9a65289bbd2e639c1f_prof);

        
        $__internal_ed216e9e51c6201096a9a6baf98a4a69c263f35b8df40a4157561911d1d90b54->leave($__internal_ed216e9e51c6201096a9a6baf98a4a69c263f35b8df40a4157561911d1d90b54_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_54a85a6e62837593f900cbd1b87b45dc57b3318da7f182711f8d1cf6c4c6f01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a85a6e62837593f900cbd1b87b45dc57b3318da7f182711f8d1cf6c4c6f01d->enter($__internal_54a85a6e62837593f900cbd1b87b45dc57b3318da7f182711f8d1cf6c4c6f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a079913cf7c0472a5162fc1a71ff65f17d887633edf3d13ab06cd7818cb55761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a079913cf7c0472a5162fc1a71ff65f17d887633edf3d13ab06cd7818cb55761->enter($__internal_a079913cf7c0472a5162fc1a71ff65f17d887633edf3d13ab06cd7818cb55761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a079913cf7c0472a5162fc1a71ff65f17d887633edf3d13ab06cd7818cb55761->leave($__internal_a079913cf7c0472a5162fc1a71ff65f17d887633edf3d13ab06cd7818cb55761_prof);

        
        $__internal_54a85a6e62837593f900cbd1b87b45dc57b3318da7f182711f8d1cf6c4c6f01d->leave($__internal_54a85a6e62837593f900cbd1b87b45dc57b3318da7f182711f8d1cf6c4c6f01d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ce4e9d14e1f18dd14abb431e55c6fbaee536ab604ddc251510f11f903eb46495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4e9d14e1f18dd14abb431e55c6fbaee536ab604ddc251510f11f903eb46495->enter($__internal_ce4e9d14e1f18dd14abb431e55c6fbaee536ab604ddc251510f11f903eb46495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f1a3fdf301ab3778c560a654e022e59779884fcf8d5319824b55bf230b36e720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a3fdf301ab3778c560a654e022e59779884fcf8d5319824b55bf230b36e720->enter($__internal_f1a3fdf301ab3778c560a654e022e59779884fcf8d5319824b55bf230b36e720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f1a3fdf301ab3778c560a654e022e59779884fcf8d5319824b55bf230b36e720->leave($__internal_f1a3fdf301ab3778c560a654e022e59779884fcf8d5319824b55bf230b36e720_prof);

        
        $__internal_ce4e9d14e1f18dd14abb431e55c6fbaee536ab604ddc251510f11f903eb46495->leave($__internal_ce4e9d14e1f18dd14abb431e55c6fbaee536ab604ddc251510f11f903eb46495_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_65bce5355d22d33f02b0d3baa49ad5c7c9067471677f1cfb9a9a4e2f2a91598f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bce5355d22d33f02b0d3baa49ad5c7c9067471677f1cfb9a9a4e2f2a91598f->enter($__internal_65bce5355d22d33f02b0d3baa49ad5c7c9067471677f1cfb9a9a4e2f2a91598f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8c109ecb4edbebbc62a6f82bb9beddfb63c63ea76911565daaca86d9ee7f97fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c109ecb4edbebbc62a6f82bb9beddfb63c63ea76911565daaca86d9ee7f97fd->enter($__internal_8c109ecb4edbebbc62a6f82bb9beddfb63c63ea76911565daaca86d9ee7f97fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8c109ecb4edbebbc62a6f82bb9beddfb63c63ea76911565daaca86d9ee7f97fd->leave($__internal_8c109ecb4edbebbc62a6f82bb9beddfb63c63ea76911565daaca86d9ee7f97fd_prof);

        
        $__internal_65bce5355d22d33f02b0d3baa49ad5c7c9067471677f1cfb9a9a4e2f2a91598f->leave($__internal_65bce5355d22d33f02b0d3baa49ad5c7c9067471677f1cfb9a9a4e2f2a91598f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
