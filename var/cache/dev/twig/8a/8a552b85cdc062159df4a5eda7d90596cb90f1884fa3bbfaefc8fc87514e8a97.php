<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ebbf784bfc08a546b201fd8c354b54daa8243d1b7199aff3b7382b50acf64c05 extends Twig_Template
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
        $__internal_0c39f9b9064ccc7c8a18473cefcf7e845a0a5b69778202c7573f19ec279a434d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c39f9b9064ccc7c8a18473cefcf7e845a0a5b69778202c7573f19ec279a434d->enter($__internal_0c39f9b9064ccc7c8a18473cefcf7e845a0a5b69778202c7573f19ec279a434d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b1494658f43a33def69745b14abf9a7843cb20025230f5343bcca425c09963bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1494658f43a33def69745b14abf9a7843cb20025230f5343bcca425c09963bd->enter($__internal_b1494658f43a33def69745b14abf9a7843cb20025230f5343bcca425c09963bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0c39f9b9064ccc7c8a18473cefcf7e845a0a5b69778202c7573f19ec279a434d->leave($__internal_0c39f9b9064ccc7c8a18473cefcf7e845a0a5b69778202c7573f19ec279a434d_prof);

        
        $__internal_b1494658f43a33def69745b14abf9a7843cb20025230f5343bcca425c09963bd->leave($__internal_b1494658f43a33def69745b14abf9a7843cb20025230f5343bcca425c09963bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
