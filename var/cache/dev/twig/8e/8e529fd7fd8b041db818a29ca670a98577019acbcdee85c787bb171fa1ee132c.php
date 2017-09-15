<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_eb6671fd161dda1e2ada626f4ea4641e222ea370ced56298a81af7ff993518dc extends Twig_Template
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
        $__internal_c58e6aa5761caa9d7e256682976fcd8e64d6b597453f988b75d88a057c057b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58e6aa5761caa9d7e256682976fcd8e64d6b597453f988b75d88a057c057b5f->enter($__internal_c58e6aa5761caa9d7e256682976fcd8e64d6b597453f988b75d88a057c057b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9776810acdfe50754757d7682cc370b6eaff392ee222c1874dac498d1ad691f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9776810acdfe50754757d7682cc370b6eaff392ee222c1874dac498d1ad691f6->enter($__internal_9776810acdfe50754757d7682cc370b6eaff392ee222c1874dac498d1ad691f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c58e6aa5761caa9d7e256682976fcd8e64d6b597453f988b75d88a057c057b5f->leave($__internal_c58e6aa5761caa9d7e256682976fcd8e64d6b597453f988b75d88a057c057b5f_prof);

        
        $__internal_9776810acdfe50754757d7682cc370b6eaff392ee222c1874dac498d1ad691f6->leave($__internal_9776810acdfe50754757d7682cc370b6eaff392ee222c1874dac498d1ad691f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
