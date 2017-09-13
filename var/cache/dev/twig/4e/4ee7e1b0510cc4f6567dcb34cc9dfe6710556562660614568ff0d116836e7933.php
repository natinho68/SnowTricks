<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c885ebaea4afcd1b1cccbeadae710866f07f76bb81c60aeb95781441b5ee6791 extends Twig_Template
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
        $__internal_a54bf926f29c081420e8bd838cfea7d5589c0b1201cf8178371eac57a0232bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54bf926f29c081420e8bd838cfea7d5589c0b1201cf8178371eac57a0232bbf->enter($__internal_a54bf926f29c081420e8bd838cfea7d5589c0b1201cf8178371eac57a0232bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_8232ba609b7d2b8dc6924d3a6988337b580b7040584d60678aff4d7f66484450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8232ba609b7d2b8dc6924d3a6988337b580b7040584d60678aff4d7f66484450->enter($__internal_8232ba609b7d2b8dc6924d3a6988337b580b7040584d60678aff4d7f66484450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a54bf926f29c081420e8bd838cfea7d5589c0b1201cf8178371eac57a0232bbf->leave($__internal_a54bf926f29c081420e8bd838cfea7d5589c0b1201cf8178371eac57a0232bbf_prof);

        
        $__internal_8232ba609b7d2b8dc6924d3a6988337b580b7040584d60678aff4d7f66484450->leave($__internal_8232ba609b7d2b8dc6924d3a6988337b580b7040584d60678aff4d7f66484450_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_02d220f5e2c4a20fc49e13c7203ddcec9175818cf052d9291cc0b4ff30d27821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d220f5e2c4a20fc49e13c7203ddcec9175818cf052d9291cc0b4ff30d27821->enter($__internal_02d220f5e2c4a20fc49e13c7203ddcec9175818cf052d9291cc0b4ff30d27821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4addcb5866ba0f1dfc298f3bfca4d7cf081e3b0dd11fd43dd6e9b0c61d8070dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4addcb5866ba0f1dfc298f3bfca4d7cf081e3b0dd11fd43dd6e9b0c61d8070dc->enter($__internal_4addcb5866ba0f1dfc298f3bfca4d7cf081e3b0dd11fd43dd6e9b0c61d8070dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4addcb5866ba0f1dfc298f3bfca4d7cf081e3b0dd11fd43dd6e9b0c61d8070dc->leave($__internal_4addcb5866ba0f1dfc298f3bfca4d7cf081e3b0dd11fd43dd6e9b0c61d8070dc_prof);

        
        $__internal_02d220f5e2c4a20fc49e13c7203ddcec9175818cf052d9291cc0b4ff30d27821->leave($__internal_02d220f5e2c4a20fc49e13c7203ddcec9175818cf052d9291cc0b4ff30d27821_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_27dda4c6bd730cc29f0d59b8140b9bb9e8574ffea535337b22113c105ef72ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27dda4c6bd730cc29f0d59b8140b9bb9e8574ffea535337b22113c105ef72ae7->enter($__internal_27dda4c6bd730cc29f0d59b8140b9bb9e8574ffea535337b22113c105ef72ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ed29c7b4a9785d582986b87980aa87bb722e4e5df9b245b932ea2d15ac78cfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed29c7b4a9785d582986b87980aa87bb722e4e5df9b245b932ea2d15ac78cfbf->enter($__internal_ed29c7b4a9785d582986b87980aa87bb722e4e5df9b245b932ea2d15ac78cfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ed29c7b4a9785d582986b87980aa87bb722e4e5df9b245b932ea2d15ac78cfbf->leave($__internal_ed29c7b4a9785d582986b87980aa87bb722e4e5df9b245b932ea2d15ac78cfbf_prof);

        
        $__internal_27dda4c6bd730cc29f0d59b8140b9bb9e8574ffea535337b22113c105ef72ae7->leave($__internal_27dda4c6bd730cc29f0d59b8140b9bb9e8574ffea535337b22113c105ef72ae7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a6fe9b29bed23d7c78c929bea4e0fe566073e8b61681bba522020fdee45d9744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fe9b29bed23d7c78c929bea4e0fe566073e8b61681bba522020fdee45d9744->enter($__internal_a6fe9b29bed23d7c78c929bea4e0fe566073e8b61681bba522020fdee45d9744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3b3fe3528473d1d26a55fdfe81b3be206a7155655c76cf524764c11285e683c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3fe3528473d1d26a55fdfe81b3be206a7155655c76cf524764c11285e683c4->enter($__internal_3b3fe3528473d1d26a55fdfe81b3be206a7155655c76cf524764c11285e683c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3b3fe3528473d1d26a55fdfe81b3be206a7155655c76cf524764c11285e683c4->leave($__internal_3b3fe3528473d1d26a55fdfe81b3be206a7155655c76cf524764c11285e683c4_prof);

        
        $__internal_a6fe9b29bed23d7c78c929bea4e0fe566073e8b61681bba522020fdee45d9744->leave($__internal_a6fe9b29bed23d7c78c929bea4e0fe566073e8b61681bba522020fdee45d9744_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
