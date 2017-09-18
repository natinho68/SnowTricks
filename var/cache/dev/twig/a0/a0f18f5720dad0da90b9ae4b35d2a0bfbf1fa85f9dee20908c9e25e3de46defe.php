<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b72dc14e22d90f4cd371c2a43c0ca0c517c2bcd954b1223a27bbb4702dcd701 extends Twig_Template
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
        $__internal_269b20c6cdbd8a08843a6746ad7a251eb7b13a33c2310c59bba97200345e161d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269b20c6cdbd8a08843a6746ad7a251eb7b13a33c2310c59bba97200345e161d->enter($__internal_269b20c6cdbd8a08843a6746ad7a251eb7b13a33c2310c59bba97200345e161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_7f5c58432ab0b2126128f6111ea3408c56b7644d0d17e95b21ed8416d6c0c349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5c58432ab0b2126128f6111ea3408c56b7644d0d17e95b21ed8416d6c0c349->enter($__internal_7f5c58432ab0b2126128f6111ea3408c56b7644d0d17e95b21ed8416d6c0c349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_269b20c6cdbd8a08843a6746ad7a251eb7b13a33c2310c59bba97200345e161d->leave($__internal_269b20c6cdbd8a08843a6746ad7a251eb7b13a33c2310c59bba97200345e161d_prof);

        
        $__internal_7f5c58432ab0b2126128f6111ea3408c56b7644d0d17e95b21ed8416d6c0c349->leave($__internal_7f5c58432ab0b2126128f6111ea3408c56b7644d0d17e95b21ed8416d6c0c349_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
