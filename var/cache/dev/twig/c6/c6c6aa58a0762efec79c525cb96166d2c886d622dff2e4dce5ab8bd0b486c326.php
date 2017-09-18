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
        $__internal_96ad672e049e31f0d9278d6b52cee528f7879b6cc57c5aa9cc37132d30be75a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ad672e049e31f0d9278d6b52cee528f7879b6cc57c5aa9cc37132d30be75a9->enter($__internal_96ad672e049e31f0d9278d6b52cee528f7879b6cc57c5aa9cc37132d30be75a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_1a5153ed875915bc6fbf97d79fc5aea92cdb8d5cf0c5eaa2b5b3a93747b4843a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5153ed875915bc6fbf97d79fc5aea92cdb8d5cf0c5eaa2b5b3a93747b4843a->enter($__internal_1a5153ed875915bc6fbf97d79fc5aea92cdb8d5cf0c5eaa2b5b3a93747b4843a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_96ad672e049e31f0d9278d6b52cee528f7879b6cc57c5aa9cc37132d30be75a9->leave($__internal_96ad672e049e31f0d9278d6b52cee528f7879b6cc57c5aa9cc37132d30be75a9_prof);

        
        $__internal_1a5153ed875915bc6fbf97d79fc5aea92cdb8d5cf0c5eaa2b5b3a93747b4843a->leave($__internal_1a5153ed875915bc6fbf97d79fc5aea92cdb8d5cf0c5eaa2b5b3a93747b4843a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_186be3da9ef9518405a89eadc5e83a10bd260e75414e7717671b02cc3aeb3163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186be3da9ef9518405a89eadc5e83a10bd260e75414e7717671b02cc3aeb3163->enter($__internal_186be3da9ef9518405a89eadc5e83a10bd260e75414e7717671b02cc3aeb3163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2d8be445ad72564c3844d9b27fbaca1dd5b01b0a21853f1478f853a3c65a905d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8be445ad72564c3844d9b27fbaca1dd5b01b0a21853f1478f853a3c65a905d->enter($__internal_2d8be445ad72564c3844d9b27fbaca1dd5b01b0a21853f1478f853a3c65a905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2d8be445ad72564c3844d9b27fbaca1dd5b01b0a21853f1478f853a3c65a905d->leave($__internal_2d8be445ad72564c3844d9b27fbaca1dd5b01b0a21853f1478f853a3c65a905d_prof);

        
        $__internal_186be3da9ef9518405a89eadc5e83a10bd260e75414e7717671b02cc3aeb3163->leave($__internal_186be3da9ef9518405a89eadc5e83a10bd260e75414e7717671b02cc3aeb3163_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e61aad6f63255c0960ad0d43a5bac6ead32671a342294329e851921f4a4ce3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61aad6f63255c0960ad0d43a5bac6ead32671a342294329e851921f4a4ce3c5->enter($__internal_e61aad6f63255c0960ad0d43a5bac6ead32671a342294329e851921f4a4ce3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c01543c93c642888a89a0940a3af5d9087f70717c55dacba75372acc6858a3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01543c93c642888a89a0940a3af5d9087f70717c55dacba75372acc6858a3c5->enter($__internal_c01543c93c642888a89a0940a3af5d9087f70717c55dacba75372acc6858a3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c01543c93c642888a89a0940a3af5d9087f70717c55dacba75372acc6858a3c5->leave($__internal_c01543c93c642888a89a0940a3af5d9087f70717c55dacba75372acc6858a3c5_prof);

        
        $__internal_e61aad6f63255c0960ad0d43a5bac6ead32671a342294329e851921f4a4ce3c5->leave($__internal_e61aad6f63255c0960ad0d43a5bac6ead32671a342294329e851921f4a4ce3c5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1f7626dae61bb56b5d6c35d16136421b3e3cf3d6bc59b564061082279e02c331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7626dae61bb56b5d6c35d16136421b3e3cf3d6bc59b564061082279e02c331->enter($__internal_1f7626dae61bb56b5d6c35d16136421b3e3cf3d6bc59b564061082279e02c331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_eb581f06c8f00b6360741f3697e512af7d912abd4a776986df63bdf94966866e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb581f06c8f00b6360741f3697e512af7d912abd4a776986df63bdf94966866e->enter($__internal_eb581f06c8f00b6360741f3697e512af7d912abd4a776986df63bdf94966866e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eb581f06c8f00b6360741f3697e512af7d912abd4a776986df63bdf94966866e->leave($__internal_eb581f06c8f00b6360741f3697e512af7d912abd4a776986df63bdf94966866e_prof);

        
        $__internal_1f7626dae61bb56b5d6c35d16136421b3e3cf3d6bc59b564061082279e02c331->leave($__internal_1f7626dae61bb56b5d6c35d16136421b3e3cf3d6bc59b564061082279e02c331_prof);

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
