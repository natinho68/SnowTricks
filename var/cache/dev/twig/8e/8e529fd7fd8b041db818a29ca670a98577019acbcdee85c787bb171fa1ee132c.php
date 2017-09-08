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
        $__internal_7beabcc8c1dcb6894a2d8d2dfae5c0f11d46ee2bb63e0d12adc33b5ebf3e3f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7beabcc8c1dcb6894a2d8d2dfae5c0f11d46ee2bb63e0d12adc33b5ebf3e3f2a->enter($__internal_7beabcc8c1dcb6894a2d8d2dfae5c0f11d46ee2bb63e0d12adc33b5ebf3e3f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5b4d4bfd99ccb03bc249f12799207bf3c6c0c99db265da9797525d5845c6990e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4d4bfd99ccb03bc249f12799207bf3c6c0c99db265da9797525d5845c6990e->enter($__internal_5b4d4bfd99ccb03bc249f12799207bf3c6c0c99db265da9797525d5845c6990e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7beabcc8c1dcb6894a2d8d2dfae5c0f11d46ee2bb63e0d12adc33b5ebf3e3f2a->leave($__internal_7beabcc8c1dcb6894a2d8d2dfae5c0f11d46ee2bb63e0d12adc33b5ebf3e3f2a_prof);

        
        $__internal_5b4d4bfd99ccb03bc249f12799207bf3c6c0c99db265da9797525d5845c6990e->leave($__internal_5b4d4bfd99ccb03bc249f12799207bf3c6c0c99db265da9797525d5845c6990e_prof);

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
