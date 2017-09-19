<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7c5806aad47eca9dc1d3785e3783897f2a127d8ada33f997d509eaad15b00e73 extends Twig_Template
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
        $__internal_bbb7ac305d1f4e858c6c0848890f7bb977411c80fde72a7ad3280b4e1528b3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb7ac305d1f4e858c6c0848890f7bb977411c80fde72a7ad3280b4e1528b3da->enter($__internal_bbb7ac305d1f4e858c6c0848890f7bb977411c80fde72a7ad3280b4e1528b3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_55bca29281bab38f76565f37db264f67f44fdf4dba85bc9cc557e0f3f3901c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bca29281bab38f76565f37db264f67f44fdf4dba85bc9cc557e0f3f3901c81->enter($__internal_55bca29281bab38f76565f37db264f67f44fdf4dba85bc9cc557e0f3f3901c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bbb7ac305d1f4e858c6c0848890f7bb977411c80fde72a7ad3280b4e1528b3da->leave($__internal_bbb7ac305d1f4e858c6c0848890f7bb977411c80fde72a7ad3280b4e1528b3da_prof);

        
        $__internal_55bca29281bab38f76565f37db264f67f44fdf4dba85bc9cc557e0f3f3901c81->leave($__internal_55bca29281bab38f76565f37db264f67f44fdf4dba85bc9cc557e0f3f3901c81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
