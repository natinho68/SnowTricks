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
        $__internal_f620fca9bd87c6d61e5a290b7904968dd5f883d3aa38f026548b0b8e5b532b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f620fca9bd87c6d61e5a290b7904968dd5f883d3aa38f026548b0b8e5b532b00->enter($__internal_f620fca9bd87c6d61e5a290b7904968dd5f883d3aa38f026548b0b8e5b532b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5c73d21d880c5e8e5155d1a4e66d7f4b9f5d8abdaa79af25ed7135e8b2a9372f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c73d21d880c5e8e5155d1a4e66d7f4b9f5d8abdaa79af25ed7135e8b2a9372f->enter($__internal_5c73d21d880c5e8e5155d1a4e66d7f4b9f5d8abdaa79af25ed7135e8b2a9372f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f620fca9bd87c6d61e5a290b7904968dd5f883d3aa38f026548b0b8e5b532b00->leave($__internal_f620fca9bd87c6d61e5a290b7904968dd5f883d3aa38f026548b0b8e5b532b00_prof);

        
        $__internal_5c73d21d880c5e8e5155d1a4e66d7f4b9f5d8abdaa79af25ed7135e8b2a9372f->leave($__internal_5c73d21d880c5e8e5155d1a4e66d7f4b9f5d8abdaa79af25ed7135e8b2a9372f_prof);

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
