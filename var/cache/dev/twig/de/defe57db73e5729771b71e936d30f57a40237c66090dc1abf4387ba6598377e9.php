<?php

/* ::fields.html.twig */
class __TwigTemplate_1736cb7dd08582ac4c7a000bba760c587b984f02fec0558d37bffa2dabbf4981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_385f18d4ef919d81fca34ac402a0a0ea2965ed16f5708594a231388342109dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385f18d4ef919d81fca34ac402a0a0ea2965ed16f5708594a231388342109dc3->enter($__internal_385f18d4ef919d81fca34ac402a0a0ea2965ed16f5708594a231388342109dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_54e11ab56687f8e989d0f2c34989f3dc11b8103c6cc65f7d63f830bc2c6f3ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e11ab56687f8e989d0f2c34989f3dc11b8103c6cc65f7d63f830bc2c6f3ea5->enter($__internal_54e11ab56687f8e989d0f2c34989f3dc11b8103c6cc65f7d63f830bc2c6f3ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_385f18d4ef919d81fca34ac402a0a0ea2965ed16f5708594a231388342109dc3->leave($__internal_385f18d4ef919d81fca34ac402a0a0ea2965ed16f5708594a231388342109dc3_prof);

        
        $__internal_54e11ab56687f8e989d0f2c34989f3dc11b8103c6cc65f7d63f830bc2c6f3ea5->leave($__internal_54e11ab56687f8e989d0f2c34989f3dc11b8103c6cc65f7d63f830bc2c6f3ea5_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_2f1735a30744450f438b23d1b70ca68ec1f9faf93117fda015625f4e82cfcca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1735a30744450f438b23d1b70ca68ec1f9faf93117fda015625f4e82cfcca1->enter($__internal_2f1735a30744450f438b23d1b70ca68ec1f9faf93117fda015625f4e82cfcca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_8f1c65aec858bc63de21200e8c35ad2db4f2a1f814125ded434dfabe66837888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1c65aec858bc63de21200e8c35ad2db4f2a1f814125ded434dfabe66837888->enter($__internal_8f1c65aec858bc63de21200e8c35ad2db4f2a1f814125ded434dfabe66837888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "

        ";
        // line 5
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        ";
        // line 6
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")))) {
            // line 7
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url"))), "html", null, true);
            echo "\" width=\"150\" height=\"150\"/>
        ";
        }
        // line 9
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8f1c65aec858bc63de21200e8c35ad2db4f2a1f814125ded434dfabe66837888->leave($__internal_8f1c65aec858bc63de21200e8c35ad2db4f2a1f814125ded434dfabe66837888_prof);

        
        $__internal_2f1735a30744450f438b23d1b70ca68ec1f9faf93117fda015625f4e82cfcca1->leave($__internal_2f1735a30744450f438b23d1b70ca68ec1f9faf93117fda015625f4e82cfcca1_prof);

    }

    public function getTemplateName()
    {
        return "::fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  57 => 7,  55 => 6,  51 => 5,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block file_widget %}
    {% spaceless %}


        {{ block('form_widget') }}
        {% if image_url is not null %}
            <img src=\"{{ asset(image_url) }}\" width=\"150\" height=\"150\"/>
        {% endif %}

    {% endspaceless %}
{% endblock %}
", "::fields.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/fields.html.twig");
    }
}
