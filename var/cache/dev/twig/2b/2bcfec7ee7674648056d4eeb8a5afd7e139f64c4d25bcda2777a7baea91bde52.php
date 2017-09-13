<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7f545f45d40b090af3f7723592b96f041df094c47e0e7faa3dfd0caedc111fcf extends Twig_Template
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
        $__internal_84e3bcac9c06573e526c25a5f8d7acf48d9c9968bd6eac0a15469a2efb57d747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e3bcac9c06573e526c25a5f8d7acf48d9c9968bd6eac0a15469a2efb57d747->enter($__internal_84e3bcac9c06573e526c25a5f8d7acf48d9c9968bd6eac0a15469a2efb57d747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b6ca5ec3e8e08c8bb2dceb56fb3574b3bf27b484c40923abf783430565366529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ca5ec3e8e08c8bb2dceb56fb3574b3bf27b484c40923abf783430565366529->enter($__internal_b6ca5ec3e8e08c8bb2dceb56fb3574b3bf27b484c40923abf783430565366529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_84e3bcac9c06573e526c25a5f8d7acf48d9c9968bd6eac0a15469a2efb57d747->leave($__internal_84e3bcac9c06573e526c25a5f8d7acf48d9c9968bd6eac0a15469a2efb57d747_prof);

        
        $__internal_b6ca5ec3e8e08c8bb2dceb56fb3574b3bf27b484c40923abf783430565366529->leave($__internal_b6ca5ec3e8e08c8bb2dceb56fb3574b3bf27b484c40923abf783430565366529_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
