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
        $__internal_8988d6f69936fcd52a090e21605f74156261f8061f6ac504a8aa7b95f11c2cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8988d6f69936fcd52a090e21605f74156261f8061f6ac504a8aa7b95f11c2cf1->enter($__internal_8988d6f69936fcd52a090e21605f74156261f8061f6ac504a8aa7b95f11c2cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d79550b6875c50571b3a646c8dda1bf81c61834f32cff9166c3f83c177f54367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79550b6875c50571b3a646c8dda1bf81c61834f32cff9166c3f83c177f54367->enter($__internal_d79550b6875c50571b3a646c8dda1bf81c61834f32cff9166c3f83c177f54367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8988d6f69936fcd52a090e21605f74156261f8061f6ac504a8aa7b95f11c2cf1->leave($__internal_8988d6f69936fcd52a090e21605f74156261f8061f6ac504a8aa7b95f11c2cf1_prof);

        
        $__internal_d79550b6875c50571b3a646c8dda1bf81c61834f32cff9166c3f83c177f54367->leave($__internal_d79550b6875c50571b3a646c8dda1bf81c61834f32cff9166c3f83c177f54367_prof);

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
