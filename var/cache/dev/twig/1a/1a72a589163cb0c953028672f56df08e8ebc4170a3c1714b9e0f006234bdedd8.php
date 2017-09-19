<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_24828bd1125ef69f12debff2bae7e8939b81b1fcafe0c42b4f612c42ac34bc26 extends Twig_Template
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
        $__internal_ea71b40b5ac6ec9822fdf24ff5f49f6abf19bc441b833dd5d22ff91e59364a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea71b40b5ac6ec9822fdf24ff5f49f6abf19bc441b833dd5d22ff91e59364a22->enter($__internal_ea71b40b5ac6ec9822fdf24ff5f49f6abf19bc441b833dd5d22ff91e59364a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2c8add9fc4859ac4030b1a0a4dbf05d8337b28857b95b9b685c63a3154d942ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8add9fc4859ac4030b1a0a4dbf05d8337b28857b95b9b685c63a3154d942ae->enter($__internal_2c8add9fc4859ac4030b1a0a4dbf05d8337b28857b95b9b685c63a3154d942ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ea71b40b5ac6ec9822fdf24ff5f49f6abf19bc441b833dd5d22ff91e59364a22->leave($__internal_ea71b40b5ac6ec9822fdf24ff5f49f6abf19bc441b833dd5d22ff91e59364a22_prof);

        
        $__internal_2c8add9fc4859ac4030b1a0a4dbf05d8337b28857b95b9b685c63a3154d942ae->leave($__internal_2c8add9fc4859ac4030b1a0a4dbf05d8337b28857b95b9b685c63a3154d942ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
