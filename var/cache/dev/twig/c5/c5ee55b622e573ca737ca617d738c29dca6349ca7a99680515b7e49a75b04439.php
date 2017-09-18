<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fac4bda99c1c84e70b593071f7541a85fec033aa67a013a5231a0f75ae7c3c4d extends Twig_Template
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
        $__internal_575dc018658c9cae4fddbf74a1239fdbb42a58245effa3115a7c3c4453317f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575dc018658c9cae4fddbf74a1239fdbb42a58245effa3115a7c3c4453317f21->enter($__internal_575dc018658c9cae4fddbf74a1239fdbb42a58245effa3115a7c3c4453317f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_57693db1b00f3c8f5a36bf47433b1c63de0640bfb295a2c4ff898f55f61fe69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57693db1b00f3c8f5a36bf47433b1c63de0640bfb295a2c4ff898f55f61fe69b->enter($__internal_57693db1b00f3c8f5a36bf47433b1c63de0640bfb295a2c4ff898f55f61fe69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_575dc018658c9cae4fddbf74a1239fdbb42a58245effa3115a7c3c4453317f21->leave($__internal_575dc018658c9cae4fddbf74a1239fdbb42a58245effa3115a7c3c4453317f21_prof);

        
        $__internal_57693db1b00f3c8f5a36bf47433b1c63de0640bfb295a2c4ff898f55f61fe69b->leave($__internal_57693db1b00f3c8f5a36bf47433b1c63de0640bfb295a2c4ff898f55f61fe69b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
