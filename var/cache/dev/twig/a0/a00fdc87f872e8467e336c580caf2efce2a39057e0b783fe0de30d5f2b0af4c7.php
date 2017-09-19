<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2624ebf23c87beda8ecb2b017b0021a66ea15cecd5db003562c3967f6bd31e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1272cb65b8a97e552cbfc3f7257292ecce3c2ccadfe0307bb9a2faa4f59f6294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1272cb65b8a97e552cbfc3f7257292ecce3c2ccadfe0307bb9a2faa4f59f6294->enter($__internal_1272cb65b8a97e552cbfc3f7257292ecce3c2ccadfe0307bb9a2faa4f59f6294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_971d66c19db72f8bbc9b6479507d6280eb9cba324adfe436dbc21d6ee77c5f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971d66c19db72f8bbc9b6479507d6280eb9cba324adfe436dbc21d6ee77c5f85->enter($__internal_971d66c19db72f8bbc9b6479507d6280eb9cba324adfe436dbc21d6ee77c5f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1272cb65b8a97e552cbfc3f7257292ecce3c2ccadfe0307bb9a2faa4f59f6294->leave($__internal_1272cb65b8a97e552cbfc3f7257292ecce3c2ccadfe0307bb9a2faa4f59f6294_prof);

        
        $__internal_971d66c19db72f8bbc9b6479507d6280eb9cba324adfe436dbc21d6ee77c5f85->leave($__internal_971d66c19db72f8bbc9b6479507d6280eb9cba324adfe436dbc21d6ee77c5f85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
