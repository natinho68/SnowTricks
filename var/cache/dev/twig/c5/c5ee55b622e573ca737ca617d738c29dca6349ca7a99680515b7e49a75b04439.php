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
        $__internal_d0d3d6eca10d8f790574a16a571e1f4fbcbabb8b249f8d0b171987605858d7f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d3d6eca10d8f790574a16a571e1f4fbcbabb8b249f8d0b171987605858d7f6->enter($__internal_d0d3d6eca10d8f790574a16a571e1f4fbcbabb8b249f8d0b171987605858d7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2354a6db741df6af814fb36ce1d2fd77d65b0972d301de5f5bdb7bc5d18214c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2354a6db741df6af814fb36ce1d2fd77d65b0972d301de5f5bdb7bc5d18214c8->enter($__internal_2354a6db741df6af814fb36ce1d2fd77d65b0972d301de5f5bdb7bc5d18214c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d0d3d6eca10d8f790574a16a571e1f4fbcbabb8b249f8d0b171987605858d7f6->leave($__internal_d0d3d6eca10d8f790574a16a571e1f4fbcbabb8b249f8d0b171987605858d7f6_prof);

        
        $__internal_2354a6db741df6af814fb36ce1d2fd77d65b0972d301de5f5bdb7bc5d18214c8->leave($__internal_2354a6db741df6af814fb36ce1d2fd77d65b0972d301de5f5bdb7bc5d18214c8_prof);

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
