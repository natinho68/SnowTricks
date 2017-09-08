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
        $__internal_8d4d23af13cdd4e139024ed9305140d0bf3c6333bb16739c40801a82fc24ca4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4d23af13cdd4e139024ed9305140d0bf3c6333bb16739c40801a82fc24ca4d->enter($__internal_8d4d23af13cdd4e139024ed9305140d0bf3c6333bb16739c40801a82fc24ca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2bd400daa426663d4b6c6d43abd7f9940eadf4c434b69a6455fc0f6c381c70c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd400daa426663d4b6c6d43abd7f9940eadf4c434b69a6455fc0f6c381c70c6->enter($__internal_2bd400daa426663d4b6c6d43abd7f9940eadf4c434b69a6455fc0f6c381c70c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8d4d23af13cdd4e139024ed9305140d0bf3c6333bb16739c40801a82fc24ca4d->leave($__internal_8d4d23af13cdd4e139024ed9305140d0bf3c6333bb16739c40801a82fc24ca4d_prof);

        
        $__internal_2bd400daa426663d4b6c6d43abd7f9940eadf4c434b69a6455fc0f6c381c70c6->leave($__internal_2bd400daa426663d4b6c6d43abd7f9940eadf4c434b69a6455fc0f6c381c70c6_prof);

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
