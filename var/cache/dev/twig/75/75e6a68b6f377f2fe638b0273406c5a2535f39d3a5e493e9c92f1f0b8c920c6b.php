<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_21c8a174344e63b6b17e0a297183eb3f0255c9d11f7beec7f5a9d6f2d7d8b174 extends Twig_Template
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
        $__internal_729812c59e211a5a65a71115d00f89ef739eec1f3317369d3709f62894b265ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729812c59e211a5a65a71115d00f89ef739eec1f3317369d3709f62894b265ad->enter($__internal_729812c59e211a5a65a71115d00f89ef739eec1f3317369d3709f62894b265ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4ad14c712d82a8cad028811e4c79baa4f064fd8d7595f3dab2e5935b8c6c2f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad14c712d82a8cad028811e4c79baa4f064fd8d7595f3dab2e5935b8c6c2f00->enter($__internal_4ad14c712d82a8cad028811e4c79baa4f064fd8d7595f3dab2e5935b8c6c2f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_729812c59e211a5a65a71115d00f89ef739eec1f3317369d3709f62894b265ad->leave($__internal_729812c59e211a5a65a71115d00f89ef739eec1f3317369d3709f62894b265ad_prof);

        
        $__internal_4ad14c712d82a8cad028811e4c79baa4f064fd8d7595f3dab2e5935b8c6c2f00->leave($__internal_4ad14c712d82a8cad028811e4c79baa4f064fd8d7595f3dab2e5935b8c6c2f00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
