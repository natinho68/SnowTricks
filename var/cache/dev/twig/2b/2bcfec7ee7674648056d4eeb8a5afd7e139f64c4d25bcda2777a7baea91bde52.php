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
        $__internal_1205af5dbe23774a0d7cf3f550249c4ca7e93f6762bc58d9c3783c57b372ba30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1205af5dbe23774a0d7cf3f550249c4ca7e93f6762bc58d9c3783c57b372ba30->enter($__internal_1205af5dbe23774a0d7cf3f550249c4ca7e93f6762bc58d9c3783c57b372ba30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6d6e9f738963befd04ba1cc01ce08404832070a4f7e0f873c5fa7330b3425697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6e9f738963befd04ba1cc01ce08404832070a4f7e0f873c5fa7330b3425697->enter($__internal_6d6e9f738963befd04ba1cc01ce08404832070a4f7e0f873c5fa7330b3425697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1205af5dbe23774a0d7cf3f550249c4ca7e93f6762bc58d9c3783c57b372ba30->leave($__internal_1205af5dbe23774a0d7cf3f550249c4ca7e93f6762bc58d9c3783c57b372ba30_prof);

        
        $__internal_6d6e9f738963befd04ba1cc01ce08404832070a4f7e0f873c5fa7330b3425697->leave($__internal_6d6e9f738963befd04ba1cc01ce08404832070a4f7e0f873c5fa7330b3425697_prof);

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
