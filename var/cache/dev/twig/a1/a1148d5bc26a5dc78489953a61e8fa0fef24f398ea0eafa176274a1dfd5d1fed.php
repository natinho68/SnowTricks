<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_faa6d30c20dddaa47a4e06f44d9560640c3dd6f3d072f1104e152cb02c176fc6 extends Twig_Template
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
        $__internal_dabbfa8cc711a3d1abc7a2c2fd7a0192d86c0d10af14ea4becea3cda766abb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabbfa8cc711a3d1abc7a2c2fd7a0192d86c0d10af14ea4becea3cda766abb94->enter($__internal_dabbfa8cc711a3d1abc7a2c2fd7a0192d86c0d10af14ea4becea3cda766abb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_90752a595e36032427d144a55d5de6cef6b3e0f7f2a35daaf4a426d8e2d50e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90752a595e36032427d144a55d5de6cef6b3e0f7f2a35daaf4a426d8e2d50e4e->enter($__internal_90752a595e36032427d144a55d5de6cef6b3e0f7f2a35daaf4a426d8e2d50e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dabbfa8cc711a3d1abc7a2c2fd7a0192d86c0d10af14ea4becea3cda766abb94->leave($__internal_dabbfa8cc711a3d1abc7a2c2fd7a0192d86c0d10af14ea4becea3cda766abb94_prof);

        
        $__internal_90752a595e36032427d144a55d5de6cef6b3e0f7f2a35daaf4a426d8e2d50e4e->leave($__internal_90752a595e36032427d144a55d5de6cef6b3e0f7f2a35daaf4a426d8e2d50e4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
