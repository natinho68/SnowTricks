<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_64758c7d4a80afbfbf0c23ffecef34269059526dccbb4706918ae45e508582d7 extends Twig_Template
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
        $__internal_68a2e7e6cc78075e23daa7ca67f26598c042351e4b40033c6181df31922089fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a2e7e6cc78075e23daa7ca67f26598c042351e4b40033c6181df31922089fe->enter($__internal_68a2e7e6cc78075e23daa7ca67f26598c042351e4b40033c6181df31922089fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ea2f44a265d0b064ddf3fcf063f2acb316383f7635e3616a7bed6816ac4d837a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2f44a265d0b064ddf3fcf063f2acb316383f7635e3616a7bed6816ac4d837a->enter($__internal_ea2f44a265d0b064ddf3fcf063f2acb316383f7635e3616a7bed6816ac4d837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_68a2e7e6cc78075e23daa7ca67f26598c042351e4b40033c6181df31922089fe->leave($__internal_68a2e7e6cc78075e23daa7ca67f26598c042351e4b40033c6181df31922089fe_prof);

        
        $__internal_ea2f44a265d0b064ddf3fcf063f2acb316383f7635e3616a7bed6816ac4d837a->leave($__internal_ea2f44a265d0b064ddf3fcf063f2acb316383f7635e3616a7bed6816ac4d837a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
