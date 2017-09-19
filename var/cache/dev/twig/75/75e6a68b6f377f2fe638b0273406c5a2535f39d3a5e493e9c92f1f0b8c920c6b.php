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
        $__internal_d00bbd1a13d8b23210b1e7c660f1e6c774595b362e534ec822e584244d3f6d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00bbd1a13d8b23210b1e7c660f1e6c774595b362e534ec822e584244d3f6d30->enter($__internal_d00bbd1a13d8b23210b1e7c660f1e6c774595b362e534ec822e584244d3f6d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a2103534fab283c2313c67fc6524815b9a5c3371cfcb310b4f03ff407d856f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2103534fab283c2313c67fc6524815b9a5c3371cfcb310b4f03ff407d856f3c->enter($__internal_a2103534fab283c2313c67fc6524815b9a5c3371cfcb310b4f03ff407d856f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d00bbd1a13d8b23210b1e7c660f1e6c774595b362e534ec822e584244d3f6d30->leave($__internal_d00bbd1a13d8b23210b1e7c660f1e6c774595b362e534ec822e584244d3f6d30_prof);

        
        $__internal_a2103534fab283c2313c67fc6524815b9a5c3371cfcb310b4f03ff407d856f3c->leave($__internal_a2103534fab283c2313c67fc6524815b9a5c3371cfcb310b4f03ff407d856f3c_prof);

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
