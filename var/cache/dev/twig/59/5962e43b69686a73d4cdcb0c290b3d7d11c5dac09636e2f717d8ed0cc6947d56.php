<?php

/* ::base.html.twig */
class __TwigTemplate_fd2866f57d6bf127c645f28be59ccbee40ea71826226d3a4cd0c0744e3cd6f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fb099fa94250da5866230f99abf117b5b54203afad8771fff058c8c54c1a589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb099fa94250da5866230f99abf117b5b54203afad8771fff058c8c54c1a589->enter($__internal_6fb099fa94250da5866230f99abf117b5b54203afad8771fff058c8c54c1a589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_61a1c67aaf57bea651b4b0b7036e1470774d7b233b695d3003418c9f6d0d31a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a1c67aaf57bea651b4b0b7036e1470774d7b233b695d3003418c9f6d0d31a2->enter($__internal_61a1c67aaf57bea651b4b0b7036e1470774d7b233b695d3003418c9f6d0d31a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6fb099fa94250da5866230f99abf117b5b54203afad8771fff058c8c54c1a589->leave($__internal_6fb099fa94250da5866230f99abf117b5b54203afad8771fff058c8c54c1a589_prof);

        
        $__internal_61a1c67aaf57bea651b4b0b7036e1470774d7b233b695d3003418c9f6d0d31a2->leave($__internal_61a1c67aaf57bea651b4b0b7036e1470774d7b233b695d3003418c9f6d0d31a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f3c9b2b36e86f70a0e9a0878b9833b8f1aee75f75013bbd73df85a84499144f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3c9b2b36e86f70a0e9a0878b9833b8f1aee75f75013bbd73df85a84499144f->enter($__internal_2f3c9b2b36e86f70a0e9a0878b9833b8f1aee75f75013bbd73df85a84499144f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf19bb1a904f8ce0fc3da7af1bd80fa651ac8fcad9ec55bc23aae73bfe9517af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf19bb1a904f8ce0fc3da7af1bd80fa651ac8fcad9ec55bc23aae73bfe9517af->enter($__internal_bf19bb1a904f8ce0fc3da7af1bd80fa651ac8fcad9ec55bc23aae73bfe9517af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bf19bb1a904f8ce0fc3da7af1bd80fa651ac8fcad9ec55bc23aae73bfe9517af->leave($__internal_bf19bb1a904f8ce0fc3da7af1bd80fa651ac8fcad9ec55bc23aae73bfe9517af_prof);

        
        $__internal_2f3c9b2b36e86f70a0e9a0878b9833b8f1aee75f75013bbd73df85a84499144f->leave($__internal_2f3c9b2b36e86f70a0e9a0878b9833b8f1aee75f75013bbd73df85a84499144f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8fbac0b9806c0ed13543adef13ac4a4e12299fa117e9f58ac4dd90219c06b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fbac0b9806c0ed13543adef13ac4a4e12299fa117e9f58ac4dd90219c06b4c->enter($__internal_c8fbac0b9806c0ed13543adef13ac4a4e12299fa117e9f58ac4dd90219c06b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3bba4a4594e299fe1c1d041cc84cfb442b1e66eeabd3dc7dcbc3c4784e5de290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bba4a4594e299fe1c1d041cc84cfb442b1e66eeabd3dc7dcbc3c4784e5de290->enter($__internal_3bba4a4594e299fe1c1d041cc84cfb442b1e66eeabd3dc7dcbc3c4784e5de290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3bba4a4594e299fe1c1d041cc84cfb442b1e66eeabd3dc7dcbc3c4784e5de290->leave($__internal_3bba4a4594e299fe1c1d041cc84cfb442b1e66eeabd3dc7dcbc3c4784e5de290_prof);

        
        $__internal_c8fbac0b9806c0ed13543adef13ac4a4e12299fa117e9f58ac4dd90219c06b4c->leave($__internal_c8fbac0b9806c0ed13543adef13ac4a4e12299fa117e9f58ac4dd90219c06b4c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb4f8b996f76afda2a09f637d1f103c7c1f1623334de36b216ebd6e20920178f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4f8b996f76afda2a09f637d1f103c7c1f1623334de36b216ebd6e20920178f->enter($__internal_eb4f8b996f76afda2a09f637d1f103c7c1f1623334de36b216ebd6e20920178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31ef5e115e8c44597dfcaf5d56ce4d5aac7843884bd6a8a015fd4c3142fe23a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ef5e115e8c44597dfcaf5d56ce4d5aac7843884bd6a8a015fd4c3142fe23a9->enter($__internal_31ef5e115e8c44597dfcaf5d56ce4d5aac7843884bd6a8a015fd4c3142fe23a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31ef5e115e8c44597dfcaf5d56ce4d5aac7843884bd6a8a015fd4c3142fe23a9->leave($__internal_31ef5e115e8c44597dfcaf5d56ce4d5aac7843884bd6a8a015fd4c3142fe23a9_prof);

        
        $__internal_eb4f8b996f76afda2a09f637d1f103c7c1f1623334de36b216ebd6e20920178f->leave($__internal_eb4f8b996f76afda2a09f637d1f103c7c1f1623334de36b216ebd6e20920178f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1461019f5a35750ae029b6549d5afc119e7fc73995088f886c6fd80bc2e93088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1461019f5a35750ae029b6549d5afc119e7fc73995088f886c6fd80bc2e93088->enter($__internal_1461019f5a35750ae029b6549d5afc119e7fc73995088f886c6fd80bc2e93088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96073839755bfc850cc7a9c72b3c87f8fe6bd82c12deabcb232ca8da277b74fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96073839755bfc850cc7a9c72b3c87f8fe6bd82c12deabcb232ca8da277b74fc->enter($__internal_96073839755bfc850cc7a9c72b3c87f8fe6bd82c12deabcb232ca8da277b74fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96073839755bfc850cc7a9c72b3c87f8fe6bd82c12deabcb232ca8da277b74fc->leave($__internal_96073839755bfc850cc7a9c72b3c87f8fe6bd82c12deabcb232ca8da277b74fc_prof);

        
        $__internal_1461019f5a35750ae029b6549d5afc119e7fc73995088f886c6fd80bc2e93088->leave($__internal_1461019f5a35750ae029b6549d5afc119e7fc73995088f886c6fd80bc2e93088_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/base.html.twig");
    }
}
