<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_c2dfaa1b23b216bbc9ce988c377e43521d892024c3340fa257080de42f18e0c4 extends Twig_Template
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
        $__internal_bc767ef9e6c791e8017f0fd1307f3ba3eb9ef4f4dc68bbbab77e56af491ee709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc767ef9e6c791e8017f0fd1307f3ba3eb9ef4f4dc68bbbab77e56af491ee709->enter($__internal_bc767ef9e6c791e8017f0fd1307f3ba3eb9ef4f4dc68bbbab77e56af491ee709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_27e0014b1fa34fab3e0f56b615e599360098d229776d101b2d0ea6e3c3057165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e0014b1fa34fab3e0f56b615e599360098d229776d101b2d0ea6e3c3057165->enter($__internal_27e0014b1fa34fab3e0f56b615e599360098d229776d101b2d0ea6e3c3057165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bc767ef9e6c791e8017f0fd1307f3ba3eb9ef4f4dc68bbbab77e56af491ee709->leave($__internal_bc767ef9e6c791e8017f0fd1307f3ba3eb9ef4f4dc68bbbab77e56af491ee709_prof);

        
        $__internal_27e0014b1fa34fab3e0f56b615e599360098d229776d101b2d0ea6e3c3057165->leave($__internal_27e0014b1fa34fab3e0f56b615e599360098d229776d101b2d0ea6e3c3057165_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
