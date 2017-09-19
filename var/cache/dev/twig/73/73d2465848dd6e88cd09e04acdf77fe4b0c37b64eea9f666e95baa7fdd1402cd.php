<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_458d21bc00723d898918721ce1cc1220dbc8e16363130bb73be0532ff98570f5 extends Twig_Template
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
        $__internal_547edcc91023e4127cd69bfb36c15f31cb8112ae0d28283ab2d86efad1edfd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547edcc91023e4127cd69bfb36c15f31cb8112ae0d28283ab2d86efad1edfd10->enter($__internal_547edcc91023e4127cd69bfb36c15f31cb8112ae0d28283ab2d86efad1edfd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0b69aa7ea46ababff385c0d26ad06fe145a061abafb6cfbc8e1a02365c722efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b69aa7ea46ababff385c0d26ad06fe145a061abafb6cfbc8e1a02365c722efe->enter($__internal_0b69aa7ea46ababff385c0d26ad06fe145a061abafb6cfbc8e1a02365c722efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_547edcc91023e4127cd69bfb36c15f31cb8112ae0d28283ab2d86efad1edfd10->leave($__internal_547edcc91023e4127cd69bfb36c15f31cb8112ae0d28283ab2d86efad1edfd10_prof);

        
        $__internal_0b69aa7ea46ababff385c0d26ad06fe145a061abafb6cfbc8e1a02365c722efe->leave($__internal_0b69aa7ea46ababff385c0d26ad06fe145a061abafb6cfbc8e1a02365c722efe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
