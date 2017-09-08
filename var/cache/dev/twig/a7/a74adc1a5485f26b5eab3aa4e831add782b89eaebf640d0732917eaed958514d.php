<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d00b3f214028445a3500f45a8127962f2706a31790a3e44aa9210f41cc2bf5ce extends Twig_Template
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
        $__internal_8458d6c5df546259af25071c9e0e8cb8ac0cfe84862bba689f37ef578bfbc406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8458d6c5df546259af25071c9e0e8cb8ac0cfe84862bba689f37ef578bfbc406->enter($__internal_8458d6c5df546259af25071c9e0e8cb8ac0cfe84862bba689f37ef578bfbc406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ba4db4878c45a0f5ba3dc6b8371c18fc94f6610949bb0ca477ebf45c364f35c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4db4878c45a0f5ba3dc6b8371c18fc94f6610949bb0ca477ebf45c364f35c6->enter($__internal_ba4db4878c45a0f5ba3dc6b8371c18fc94f6610949bb0ca477ebf45c364f35c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8458d6c5df546259af25071c9e0e8cb8ac0cfe84862bba689f37ef578bfbc406->leave($__internal_8458d6c5df546259af25071c9e0e8cb8ac0cfe84862bba689f37ef578bfbc406_prof);

        
        $__internal_ba4db4878c45a0f5ba3dc6b8371c18fc94f6610949bb0ca477ebf45c364f35c6->leave($__internal_ba4db4878c45a0f5ba3dc6b8371c18fc94f6610949bb0ca477ebf45c364f35c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
